<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Formulier</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
        }

        .main {
            max-width: 960px; 
            margin: 0 auto; 
            padding: 16px;
            background: #eceaef;
        }

        .main, .header, .content {
            border-radius: 7px;
        }

        .header {  
            color: #665fb3; 
            padding: 8px 24px;
            text-align: center; 
            border: 3px solid #665fb3;
        }
        .content { 
            background-color: #f9f9f9;
            color: #110c1e; 
            padding: 8px 24px;
            margin-top: 16px;
            box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
            border-top: 1px solid white;
        }
        .label { 
            color: #0d8f80; 
            font-weight: bold; 
        }
        .message {
            border-top: 1px solid rgba(0, 0, 0, 0.2);
            padding-top: 16px;
        }
    </style>
</head>
<body >
    <div class="main">
        <div class="header">
            <h2>Nieuw Contact Formulier</h2>
        </div>
        <div class="content">
            <p><strong class="label">Naam:</strong> {{ $formData['name'] }} </p>
            <p><strong class="label">Email:</strong> {{ $formData['email'] }} </p>
            <p><strong class="label">Bericht:</strong></p>
            <p class="message">{{ $formData['message'] }}</p>
        </div>
    </div>
</body>
</html>