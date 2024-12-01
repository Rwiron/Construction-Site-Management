<!DOCTYPE html>
<html>

<head>
    <title>Application Status Updated</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; background-color: #f9f9f9;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="https://cdn-icons-png.flaticon.com/512/602/602182.png" alt="Logo" style="width: 80px; border-radius: 50%; margin-bottom: 10px;">
            <h1 style="font-size: 24px; color: #333;">Application Status Updated</h1>
        </div>

        <!-- Greeting -->
        <p style="font-size: 16px; color: #555;">Dear <strong>{{ $application->user->name }}</strong>,</p>

        <!-- Conditional Status Message -->
        @if ($application->status === 'Approved')
        <p style="font-size: 16px; color: #333;">
            <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Approved Icon" style="width: 20px; vertical-align: middle; margin-right: 5px;">
            We are pleased to inform you that your application has been
            <span style="color: green; font-weight: bold;">approved</span>.
        </p>
        @elseif ($application->status === 'Rejected')
        <p style="font-size: 16px; color: #333;">
            <img src="https://cdn-icons-png.flaticon.com/512/190/190406.png" alt="Rejected Icon" style="width: 20px; vertical-align: middle; margin-right: 5px;">
            We regret to inform you that your application has been
            <span style="color: red; font-weight: bold;">rejected</span>. Please contact us for more details.
        </p>
        @else
        <p style="font-size: 16px; color: #333;">
            <img src="https://cdn-icons-png.flaticon.com/512/190/190407.png" alt="Under Review Icon" style="width: 20px; vertical-align: middle; margin-right: 5px;">
            Your application is currently under review. We will notify you once it is updated.
        </p>
        @endif

        <!-- Application Details -->
        <div style="background-color: #f2f2f2; padding: 15px; border-radius: 5px; margin: 20px 0;">
            <h3 style="font-size: 18px; color: #333; margin-bottom: 10px;">
                <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="Details Icon" style="width: 20px; vertical-align: middle; margin-right: 5px;">
                Application Details:
            </h3>
            <p style="font-size: 14px; color: #555; margin: 5px 0;">
                <img src="https://cdn-icons-png.flaticon.com/512/747/747476.png" alt="ID Icon" style="width: 15px; vertical-align: middle; margin-right: 5px;">
                <strong>Application ID:</strong> {{ $application->id }}
            </p>
            <p style="font-size: 14px; color: #555; margin: 5px 0;">
                <img src="https://cdn-icons-png.flaticon.com/512/3441/3441256.png" alt="Submitted Icon" style="width: 15px; vertical-align: middle; margin-right: 5px;">
                <strong>Submitted On:</strong> {{ $application->applied_at }}
            </p>
            <p style="font-size: 14px; color: #555; margin: 5px 0;">
                <img src="https://cdn-icons-png.flaticon.com/512/2874/2874015.png" alt="Updated Icon" style="width: 15px; vertical-align: middle; margin-right: 5px;">
                <strong>Last Updated:</strong> {{ $application->updated_at }}
            </p>
            <p style="font-size: 14px; color: #555; margin: 5px 0;">
                <img src="https://cdn-icons-png.flaticon.com/512/6815/6815500.png" alt="Status Icon" style="width: 15px; vertical-align: middle; margin-right: 5px;">
                <strong>Status:</strong>
                <span style="{{ $application->status === 'Approved' ? 'color: green;' : ($application->status === 'Rejected' ? 'color: red;' : 'color: blue;') }}">
                    {{ $application->status }}
                </span>
            </p>
        </div>

        <!-- Support Information -->
        <p style="font-size: 16px; color: #555;">If you have any questions or need further assistance, please contact our support team:</p>
        <p style="font-size: 14px; color: #555;">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Phone Icon" style="width: 15px; vertical-align: middle; margin-right: 5px;">
            <strong>Phone:</strong> +250 788 253 375
        </p>
        <p style="font-size: 14px; color: #555;">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email Icon" style="width: 15px; vertical-align: middle; margin-right: 5px;">
            <strong>Email:</strong> bms@info.com
        </p>

        <!-- Footer -->
        <p style="font-size: 16px; color: #555;">Thank you for your attention, and we look forward to assisting you further.</p>
        <p style="font-size: 16px; color: #555;">Best Regards,</p>
        <p style="font-size: 16px; color: #555;">
            <img src="https://cdn-icons-png.flaticon.com/512/6815/6815500.png" alt="Team Icon" style="width: 15px; vertical-align: middle; margin-right: 5px;">
            <strong>The Application Team</strong>
        </p>
    </div>
</body>

</html>
