<table class="letter-content" align="center">
    <tr>
        <td>
            <h1 class="title">
                {{ $title }}
            </h1>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Dear {{ $name }},
                <br>
            </p>
            <p style="text-align: left">
                Thank you for reaching out to X-GUARD. We appreciate your interest in our security solutions.
                <br><br>
                We have received your inquiry, and our team will be in touch with you shortly to discuss the best
                options and solutions to meet your specific needs.
                <br><br>
                At X-GUARD, we are dedicated to providing top-tier protection, and we look forward to assisting you in
                securing what matters most.
                <br><br>
                If you have any urgent questions in the meantime, feel free to contact us at
                {{ config('mail.from.address') }}
                <br><br>
                Thank you again for choosing X-GUARD!
                <br><br>
                Best regards,
                <br>
                The X-GUARD Team
            </p>
        </td>
    </tr>
</table>
