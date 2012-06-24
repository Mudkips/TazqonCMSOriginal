<?php

	class Socket
	{
		protected $sock;
	
		public function __Construct($host, $port)
		{
			if (!($this->sock = fsockopen($host, $port, $errno, $errstr, 30)))
			{
				trigger_error('Could not connect to '.$host.':'.$port, E_USER_ERROR);
			}
		}
		
		public function Write($data)
		{
			if (!is_resource($this->sock))
			{
				return false;
			}
			
			return fputs($this->sock, $data, strlen($data));
		}
		
		public function Read($length = 512)
		{
			if (!is_resource($this->sock))
			{
				return false;
			}
			
			return fgets($this->sock, $length);
		}
		
		public function __Destruct()
		{
			if (!is_resource($this->sock))
			{
				return;
			}
			
			fclose($this->sock);
		}
	}
	
	class STMP extends Socket
	{
		public final function __Construct()
		{
			parent::__Construct($this->hostname, $this->port);
			stream_set_blocking ($this->sock, true);
			
			if (!$this->DoLogin())
			{
				trigger_error('STMP: Unable to login user', E_USER_ERROR);
			}

		}
		
		private function DoLogin()
		{
			$check = $this->Read();
			if (empty($check))
			{
				return false;
			}
			
			//Confirm
			$this->Write("HELO ".USER_IP."\r\n");
			$this->Read();
			
			if ($this->use_tls)
			{
				$this->Write("STARTTLS\r\n");
				$check = $this->Read();
				
				if (substr($check, 0, 3) != '220')
				{
					return false;
				}
				
				stream_socket_enable_crypto($this->sock, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
				
				$this->Write("HELO ".USER_IP."\r\n");
				$this->Read();
			}
			
			//Request Auth
			$this->Write("AUTH LOGIN\r\n");
			$this->Read();
			
			//Send username
			$this->Write(base64_encode($this->username)."\r\n");
			$this->Read();
			
			//Send password
			$this->Write(base64_encode($this->password)."\r\n");
			$check = $this->Read();
				
			if (substr($check, 0, 3) != '235')
			{
				return false;
			}
			
			return true;
		}
		
		public function SendMail($to, $subject, $body)
		{
			if (($to = filter_var($to, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE)) == null)
			{
				return false;
			}
			
			$this->Write("MAIL FROM: <".$this->username.">\r\n");
			$this->Read();
			
			$this->Write("RCPT TO: <".$to.">\r\n");
			$this->Read();
			
			$this->Write("DATA\r\n");
			$this->Read();
					
			$headers = "Subject: ".$subject."\r\n";
			$headers .= "From: ".$this->username." <".$this->username.">\r\n";
			$headers .= "To: ".$to."\r\n";
			$headers .= "X-Sender: <".$this->username.">\r\n";
			$headers .= "Date: ".date("r")."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html;charset=iso-8859-1\r\n";
			
			//Final packet
			$packet = $headers."\r\n".$body."\r\n.\r\n";
			
			$this->Write($packet);
			$this->Read();
			
			return true;
		}
		
		//static functions
		
		public final function __Get($key)
		{
			if (!isset(Core::$Config['stmp'][$key]))
			{
				return false;
			}
			
			return Core::$Config['stmp'][$key];
		}
	}

?>