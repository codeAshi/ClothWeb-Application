const express = require('express');
const nodemailer = require('nodemailer');
const app = express();

app.use(express.json());

// Configure the email transporter
const transporter = nodemailer.createTransport({
    service: 'Gmail', // Use your email service
    auth: {
        user: 'ashishbedare9@gmail.com', // Your email
        pass: 'ashishbedare3204', // Your email password
    },
});

// Handle order request
app.post('/api/order', (req, res) => {
    const { name, phone, address } = req.body;

    if (!name || !phone || !address) {
        return res.status(400).send('All fields are required.');
    }

    const mailOptions = {
        from: 'ashishbedare9@gmail.com',
        to: 'bedareashish@gmail.com', // Replace with customer email (if available)
        subject: 'Order Confirmation',
        text: `Hello ${name},\n\nYour order has been confirmed!\n\nDetails:\nName: ${name}\nPhone: ${phone}\nAddress: ${address}\n\nThank you for your purchase!`,
    };

    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            console.error('Error sending email:', error);
            return res.status(500).send('Failed to send email.');
        }
        console.log('Email sent: ' + info.response);
        res.status(200).send('Order placed successfully.');
    });
});

// Start the server
const PORT = 3000;
app.listen(PORT, () => console.log(`Server running at http://localhost:${PORT}`));
