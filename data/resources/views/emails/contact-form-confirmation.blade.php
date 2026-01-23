<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ __('messages.confirmation_mail.contact_form_confirmation_subject', ['name' => $formData['name']]) }}</title>
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
            <h2>{{ __('messages.confirmation_mail.contact_form_confirmation_subject', ['name' => $formData['name']]) }}</h2>
        </div>
        <div class="content">
            <p class="message">
                {{ __('messages.confirmation_mail.contact_form_greeting', ['name' => $formData['name']]) }}
                <br><br>
                {{ __('messages.confirmation_mail.contact_form_thanks') }}
                <br><br>
                {{ __('messages.confirmation_mail.contact_form_regards') }}
                <br><br>
                Peter Cornelis
            </p>
        </div>
    </div>
</body>
</html>