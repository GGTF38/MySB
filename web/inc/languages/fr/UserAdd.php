<?php
// ----------------------------------
//  __/\\\\____________/\\\\___________________/\\\\\\\\\\\____/\\\\\\\\\\\\\___
//   _\/\\\\\\________/\\\\\\_________________/\\\/////////\\\_\/\\\/////////\\\_
//	_\/\\\//\\\____/\\\//\\\____/\\\__/\\\__\//\\\______\///__\/\\\_______\/\\\_
//	 _\/\\\\///\\\/\\\/_\/\\\___\//\\\/\\\____\////\\\_________\/\\\\\\\\\\\\\\__
//	  _\/\\\__\///\\\/___\/\\\____\//\\\\\________\////\\\______\/\\\/////////\\\_
//	   _\/\\\____\///_____\/\\\_____\//\\\____________\////\\\___\/\\\_______\/\\\_
//		_\/\\\_____________\/\\\__/\\_/\\\______/\\\______\//\\\__\/\\\_______\/\\\_
//		 _\/\\\_____________\/\\\_\//\\\\/______\///\\\\\\\\\\\/___\/\\\\\\\\\\\\\/__
//		  _\///______________\///___\////__________\///////////_____\/////////////_____
//			By toulousain79 ---> https://github.com/toulousain79/
//
//#####################################################################
//
//	Copyright (c) 2013 toulousain79 (https://github.com/toulousain79/)
//	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
//	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
//	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
//	IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
//	--> Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
//
//#################### FIRST LINE #####################################

define('MainUser_UserAdd_Username', 'Nom d\'utilisateur :');
define('MainUser_UserAdd_UserEmail', 'E-mail de l\'utilisateur :');
define('MainUser_UserAdd_ConfirmEmail', 'Confirmation :');
define('MainUser_UserAdd_AccountType', 'Type de compte :');
define('MainUser_UserAdd_Quota', 'Quota (GB) :');
define('MainUser_UserAdd_AddUser', 'Ajouter cet utilisateur');
define('MainUser_UserAdd_VerifError', 'Erreur entre l\'email saisie et la v&eacute;rification.');
define('MainUser_UserAdd_QuotaMinValue', 'Veuillez saisir une valeur sup&eacute;rieur ou &eacute;gale à 5.<br />Ou laisser le champs vide.');
define('MainUser_UserAdd_QuotaMinValueEdit', 'Veuillez saisir une valeur sup&eacute;rieur ou &eacute;gale à 5 pour le quota.');
define('MainUser_UserAdd_BadAddress', 'L\'adresse e-mail indiqu&eacute;e n\'est pas valide !');
define('MainUser_UserAdd_AlreadyUsed', 'Nom d\'utilisateur d&eacute;j&agrave; utilis&eacute; !');
define('MainUser_UserAdd_UserDontExist', 'Echec !<br /><br />L\'utilisateur n\'existe pas ...');
define('MainUser_UserAdd_Table_Username', 'Nom d\'utilisateur');
define('MainUser_UserAdd_Table_Email', 'E-mail');
define('MainUser_UserAdd_Table_IsSftp', 'SFTP ?');
define('MainUser_UserAdd_Table_SetQuota', 'Forcer le quota (GB)');
define('MainUser_UserAdd_Table_Quota', 'Utilis&eacute; / Quota');
define('MainUser_UserAdd_Table_Password', 'Mot de passe');
define('MainUser_UserAdd_Table_AccountType', 'Type de compte');
define('MainUser_UserAdd_Table_QuotaType', 'Gestion du quota');
define('MainUser_UserAdd_Table_Treasury', 'Tr&eacute;sorerie');
define('MainUser_UserAdd_Table_Monthly', 'Mensualit&eacute;');
define('MainUser_UserAdd_Table_CreatedAt', 'Date de<br />cr&eacute;ation');
define('MainUser_UserAdd_QuotaTypeManual', 'manuel');
define('MainUser_UserAdd_PasswordOK', 'Modifi&eacute;');
define('MainUser_UserAdd_Comment_FreeSpace', 'Espace disponible: %s<br />Espace r&eacute;elle disponible: %s');
define('MainUser_UserAdd_Comment', 'Un compte "<b>normal</b>" disposera de tous les services.<br />
Un compte "<b>plex</b>" ne disposera d\'aucun service. Ce type de compte est conseill&eacute; pour les utilisateurs acc&eacute;dant uniquement &agrave; Plex.<br />
Les services tels que ruTorrent, Cakebox, Seedbox Manager, OpenVPN et NextCloud ne seront pas disponibles.<br />
Un compte <b>plex</b> permet de ne pas r&eacute;duire le quota disque des autres utilisateurs.<br />
<br />
Pour le <b>Quota</b>, laissez le champs vide pour une gestion automatique.<br />
Sinon, saisissez une valeur num&eacute;rique en GB.');

//#################### LAST LINE ######################################
