<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
  protected $userInfo;
  
  public function __construct()
  {

  }

  public function index()
  {
    $isLoggedIn = \Auth::check();
    return view('index')
      ->with('isLoggedIn', $isLoggedIn);
  }

  public function dump()
  {
    $isLoggedIn = \Auth::check();
    $userInfo = "login denied";
    //$userEmail = \User::getUserInfo()find::($email);
    if ($isLoggedIn) {
      $user = \App::make('auth0')->getUser();
      $userInfo = $this->getUserByUserInfo($user);
    }
    return $userInfo;
      /*
      return view('dump')
      ->with('isLoggedIn', $isLoggedIn)
      ->with('user',\Auth::user()->getUserInfo())
      ->with('accessToken',\Auth::user()->getAuthPassword());
  */
    }

    public function getInfo() 
    {
      $curl = curl_init();
      curl_setopt_array($curl, array(
                  CURLOPT_URL => "https://csc342test.auth0.com/oauth/token",
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "POST",
                  CURLOPT_POSTFIELDS => "{\"client_id\":\"l4IelmlfnDSnV7OEN5M8ez8EEnRvZbQC\",\"client_secret\":\"u6Og_FcfknUJQjJ2HWErc25bHdUI7K5y8W-r9s3wk659-p3moBN1t2yypdhp1K1z\",\"audience\":\"https://csc342test.auth0.com/api/v2/\",\"grant_type\":\"client_credentials\"}",
                  CURLOPT_HTTPHEADER => array(
                      "content-type: application/json"
                  ),
              ));
      
              $response = curl_exec($curl);
              $err = curl_error($curl);
              curl_close($curl);
              if ($err) {
                  echo "cURL Error #:" . $err;
              } else {
                  $apitoken = $response;
                  echo $response;
              }
              
              $curl = curl_init();
      
              curl_setopt_array($curl, array(
                  CURLOPT_URL => "https://csc342test.auth0.com/api/v2/users",
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "GET",
                  CURLOPT_HTTPHEADER => array(
                      "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6Ik5qSXdSVUZDTVRjNVEwWkJSVEF5UmpreFFqYzVRalUzTXpZNU9UZzVRVE5GTWpNek9FRkNSQSJ9.eyJpc3MiOiJodHRwczovL2NzYzM0MnRlc3QuYXV0aDAuY29tLyIsInN1YiI6Imw0SWVsbWxmbkRTblY3T0VONU04ZXo4RUVuUnZaYlFDQGNsaWVudHMiLCJhdWQiOiJodHRwczovL2NzYzM0MnRlc3QuYXV0aDAuY29tL2FwaS92Mi8iLCJpYXQiOjE1MTMwNTAwMTgsImV4cCI6MTUxMzEzNjQxOCwic2NvcGUiOiJyZWFkOmNsaWVudF9ncmFudHMgZGVsZXRlOmNsaWVudF9ncmFudHMgdXBkYXRlOmNsaWVudF9ncmFudHMgcmVhZDp1c2VycyB1cGRhdGU6dXNlcnMgY3JlYXRlOnVzZXJzIHJlYWQ6dXNlcnNfYXBwX21ldGFkYXRhIHJlYWQ6Y29ubmVjdGlvbnMgdXBkYXRlOmNvbm5lY3Rpb25zIHJlYWQ6Y3VzdG9tX2RvbWFpbnMiLCJndHkiOiJjbGllbnQtY3JlZGVudGlhbHMifQ.EVhpOa2c1EWMwaaROmElGDT-sLEpFF0Bqxu5t9FloQXI6P77xTB6qJY0ioqGOvzqzH5FQi2O8L3XSPfr3c43DeFtmeMLWAB99vRs71ZEpOZCDFXO4GZXwCeem1_vDZzUIw-wZyW823b3VhbGiSRsYWoT0kEIxa9uNBDUUlNFD1xrn3ThZCaWYEmDJknq0XV-A4_SbQQrrzT-y3TUXWrdtLI5MrLD53aCcBrMLoQDAw4e19y2U0EqdNY5gWf7_BQtVa63GGAdm8Djz-uYzUgckT464MZ1kGDKTEVw-oBq7igZpbSLTJgnk5l8MNAVaMiSdcBRSRdr7HVzq6is1-BHvg"
                  ),
              ));
      
              $response = curl_exec($curl);
              $err = curl_error($curl);
      
              curl_close($curl);
      
              if ($err) {
                  echo "cURL Error #:" . $err;
              } else {
                  echo $response;
              }
          }

}