<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>OutreachCrown</title> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            background-color: #ffffff;
            border-collapse: collapse;
        }
        .header {
            text-align: center;
            padding: 12px;
            background-color: #7c8998;
            color: #fff;
            font-size: 22px;
        }
        .section {
            padding: 20px;
            text-align: left;
            color: #333;
        }
        .footer {
            padding: 10px;
            background-color: #f1f1f1;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .flex-container {
        display: flex;
        padding: 20px;
    }

    .flex-item {
        box-sizing: border-box; /* Ensure padding doesn't affect width */
        background-color: #f9f9f9;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
        max-width: 30%;
        margin: 10px;
    }

    .flex-item p {
        margin: 8px 0; /* Adjust spacing between paragraphs */
        color: #333;
        line-height: 1.5;
    }

    /* Car Images Section */
    .car-images {
        display: flex;
        flex-wrap: wrap;
        justify-content: start;
        gap: 10px;
        padding: 20px;
    }

    .car-images img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .car-images a {
        text-decoration: none;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .flex-item {
            flex: 1 1 calc(50% - 20px); /* 2 columns on medium screens */
        }
    }

    @media (max-width: 480px) {
        .flex-item {
            flex: 1 1 100%; /* 1 column on small screens */
        }
    }
    </style>
</head>
<body>

    <table>
        <tr>
            <td class="header">
                <!-- <h2 style="color:#fff !important;font-family: cursive;">Mattbuysyourcar</h2> -->
                 <img src="{{ asset('images/logo.png') }}" width="200px" alt="">
            </td>
        </tr>
        <tr>
            <td class="section">
                <p><strong>Dear Matt,</strong></p>
                <br>
                <p>I hope this email finds you well.</p>
                <p>A user has submitted their car details for sale. You can review the complete information in the admin panel. Here’s a summary of the car details:<strong></strong>!</p>
                <br>
                <div class="flex-container">
                    <div class="flex-item">
                        @if(!empty($formData['car_type']))
                            <p><strong>Car Type:</strong> {{ $formData['car_type'] }}</p>
                        @endif
                        @if(!empty($formData['model']))
                            <p><strong>Model:</strong> {{ $formData['model'] }}</p>
                        @endif
                        @if(!empty($formData['specification']))
                            <p><strong>Specification:</strong> {{ $formData['specification'] }}</p>
                        @endif
                        @if(!empty($formData['engine_size']))
                            <p><strong>Engine Size:</strong> {{ $formData['engine_size'] }}</p>
                        @endif
                        @if(!empty($formData['year']))
                            <p><strong>Year:</strong> {{ $formData['year'] }}</p>
                        @endif
                        @if(!empty($formData['kilometers']))
                            <p><strong>Kilometers:</strong> {{ $formData['kilometers'] }}</p>
                        @endif
                    </div>

                    <div class="flex-item">
                        @if(!empty($formData['gcc_spec']))
                            <p><strong>GCC Spec:</strong> {{ $formData['gcc_spec'] }}</p>
                        @endif
                        @if(!empty($formData['condition']))
                            <p><strong>Condition:</strong> {{ $formData['condition'] }}</p>
                        @endif
                        @if(!empty($formData['paintwork']))
                            <p><strong>Paintwork:</strong> {{ $formData['paintwork'] }}</p>
                        @endif
                        @if(!empty($formData['interior_condition']))
                            <p><strong>Interior Condition:</strong> {{ $formData['interior_condition'] }}</p>
                        @endif
                        @if(!empty($formData['service_history']))
                            <p><strong>Service History:</strong> {{ $formData['service_history'] }}</p>
                        @endif
                        @if(!empty($formData['comment']))
                            <p><strong>Comment:</strong> {{ $formData['comment'] }}</p>
                        @endif
                        @if(!empty($formData['loan_secured']))
                            <p><strong>Loan Secured:</strong> {{ $formData['loan_secured'] }}</p>
                        @endif
                    </div>

                    <div class="flex-item">
                        @if(!empty($formData['first_name']))
                            <p><strong>First Name:</strong> {{ $formData['first_name'] }}</p>
                        @endif
                        @if(!empty($formData['last_name']))
                            <p><strong>Last Name:</strong> {{ $formData['last_name'] }}</p>
                        @endif
                        @if(!empty($formData['phone_number']))
                            <p><strong>Phone Number:</strong> {{ $formData['phone_number'] }}</p>
                        @endif
                        @if(!empty($formData['email']))
                            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
                        @endif
                        @if(!empty($formData['address']))
                            <p><strong>Address:</strong> {{ $formData['address'] }}</p>
                        @endif
                    </div>
                </div>

                <br>
                <p><strong>Car Images:</strong></p>
                <br>
                <div>
                    @if(!empty($formData['car_images']))
                        @foreach(json_decode($formData['car_images'], true) as $image)
                            <a href="{{ asset('storage/' . $image) }}" target="_blank">
                                <img src="{{ asset('storage/' . $image) }}" alt="Car Image" style="width: 150px; height: 150px; margin: 5px;">
                            </a>
                        @endforeach
                    @else
                        <p>No images available.</p>
                    @endif
                </div>

                <br>
                <p>Takecare.... Have a nice day!</p>
                <br>
                <p><strong>Regards,</strong></p>
                <p>{{ $formData['first_name'] }}  {{ $formData['last_name'] }}</p>
            </td>
        </tr>
        <tr>
            <td class="footer">
                <p>Copyright &copy; 2024 All rights reserved. | Developed by <a href="https://stepinnsolution.com/">StepinnSolution</a></p>
                <p><a href="https://www.mattbuysyourcar.com">Visit the Website</a></p>
            </td>
        </tr>
    </table>

</body>
</html>
