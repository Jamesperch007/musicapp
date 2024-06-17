<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Email Inquiry</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
      font-size: 24px;
      color: #333333;
      margin-bottom: 20px;
    }
    p {
      font-size: 16px;
      line-height: 1.5;
      color: #555555;
      margin-bottom: 10px;
    }
    .callback{
        background: #F05A22;
        color: #fff;
        padding: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>New Inquiry Received</h1>
    <p>Name:{{ $EnquiryData->fullname }}</p>
    <p>Contact No: {{ $EnquiryData->phone }}</p>
    <p>Email: <a href="mailto:{{  $EnquiryData->email }}">{{ $EnquiryData->email }}</a></p>
    <a href="tel:{{ $EnquiryData->phone }}" class="callback">CallBack</a>
   
  </div>
</body>
</html>