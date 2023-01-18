<?php
$client = new SoapClient('http://thesite.com/PortalIntegratorService.svc?wsdl');
$result = $client->authenticateLogin(array('LoginId' => 12345));
if (!empty($result->authenticateLoginResult->RequestStatus)
    && !empty($result->authenticateLoginResult->UserName)) {
    echo 'The username is: '.$result->authenticateLoginResult->UserName;
}
?>

