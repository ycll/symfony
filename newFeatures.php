<?php
$xml = <<<F
<?xml version="1.0" encoding="utf-8"?><BookingResponseV3 status="200" xmlns="http://xml.agoda.com" xmlns:tns="http://xml.agoda.com" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><BookingDetails><Booking id="8214257" ItineraryID="2214004" selfservice="http://sandbox.www.agoda.com/mybooking/customer-request.aspx?ODIxNDI1NwequALequAL-iGXT5dISpOUequAL"/></BookingDetails></BookingResponseV3>
F;

$xmlObj = simplexml_load_string($xml);
//var_export($xmlObj);

echo $xmlObj->BookingDetails->Booking->attributes()['id'];