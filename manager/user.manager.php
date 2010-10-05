<?php

//////////////////////////////////////////////////////
//Esta clase se encarga de renderizar la view deseada
//////////////////////////////////////////////////////

class UserManager
{
	var $validator;

	public function UserManager()
	{
		$this->validator = new httpRequestValidator('UserManager');
	}

	public function validate($user,$password)
	{
		if (!isset($user)) $user = new CocoasUser();

		$result = $this->validator->exect('SELECT u.status,u.id,u.locationId,u.password,r.name AS roleName FROM user u,role r WHERE (u.roleId = r.id) AND (u.email = "'.$user->name.'")');

		if(($result != false) && (mysql_num_rows($result) == 1))
		{
			$auxUser = mysql_fetch_object($result);

			//Si los hash de la clave coinciden
			if ($password == $auxUser->password)
			{
				$user->roleName   = $auxUser->roleName;
				$user->locationId = $auxUser->locationId;
				$user->status     = $auxUser->status;
				$user->id         = $auxUser->id;
			}
		}
		else
		{
			$user = new CocoasUser();
		}
		return $user;
	}

	public function loginUser()
	{
		$_SESSION["user"] = new CocoasUser();

		$user = $this->validator->getVar('user');
		$password = $this->validator->getVar('password');

		if ($password && $user)
		{
			//evito que haya colocado mas de una palabra en el login (para evitar sql injection)
			$usu = explode(" ",trim($user));

			//Guardo la identidad del cliente que desea autenticarse
			$_SESSION["user"]->name = $user;

			$_SESSION["user"] = $this->validate($_SESSION["user"],$password);
			//echo $_SESSION["usuario"]->roleId;
		}
	}

	public function closeSession()
	{
		$_SESSION["user"] = new CocoasUser();
	}

}
?>