<!DOCTYPE html>
<html>
<head>
    <title>Lost and Found</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #termsModal .modal-dialog {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            max-width: 500px;
            max-width: 50%; /* Adjust as needed */
            max-height: 100vh; /* Adjust as needed */
            overflow-y: auto; /* Add vertical scrollbar if content overflows */
        }/* Adjust as needed */
        }
    </style>
</head>
<body>

<button type="button" class="btn btn-link" data-toggle="modal" data-target="#termsModal">
    Terms and Conditions
</button>

<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5
                    class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
            <div class="modal-body">
                <p>Welcome to
                    our Lost and Found web application! By accessing or using our services, you agree to be bound by the following terms and conditions:</p>

                <h2>1. Use of the Service</h2>
                <p>You agree to use our service only for lawful purposes and in a manner that does not infringe the rights of, or restrict or inhibit the use  
                    and enjoyment of, the service by any third party.</p>


                <h2>2. User Accounts</h2>
                <p>You are responsible for maintaining the confidentiality of your account and password and for restricting access to your  
                    computer. You agree to accept responsibility for all activities that occur under your  
                    account or password.</p>

                <h2>3. Reporting Items</h2>
                <ol>
                    <li>Provide accurate and complete information about the lost or found item.</li>
                    <li>Do not report any items that are illegal or prohibited.</li>
                    <li>Respect the privacy of others when reporting items.</li>
                </ol>

                <h2>4. Disclaimer</h2>
                <p>We strive to maintain accurate and up-to-date information on our platform, but we make no warranties or representations as to the accuracy, completeness, or reliability of any information provided  
                    through the service.</p>

                <h2>5. Limitation of Liability</h2>
                <p>In no event shall we be liable for any direct, indirect, incidental, special, or consequential damages arising out of or  
                    in any way connected with the use of our service.</p>  


                <h2>6. Changes to Terms</h2>
                <p>We reserve the right to modify these terms and conditions at any time. We will post any changes on this page and update the "Last Updated" date.</p>

                <p>Last Updated: November 13, 2024</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
