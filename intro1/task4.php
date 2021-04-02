<?php 

$data = [
  "id" => 1,
  "name" => "Leanne Graham",
  "username" => "Bret",
  "email" => "Sincere@april.biz",
  "address" => 
                [
                  "street" => "Kulas Light",
                  "suite" => "Apt. 556",
                  "city" => "Gwenborough",
                  "zipcode" => "92998-3874",
                ],
  "phone" => "1-770-736-8031 x56442",
  "website" => "hildegard.org",
];

$data["name"] = "Alif Maulana Arifin";
$data["email"] = "alifmaulana26@gmail.com";
$data["hobby"] = ["Typing","Reading"];

$street = $data['address']["street"];
$city = $data['address']["city"];

print_r($data);
echo("<br/>");
echo($street);
echo("<br/>");
echo($city);