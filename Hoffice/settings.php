<?php
    include_once("header.php");
?>
<hr>
<br>

<div class="settings-main">
    <div id="nav">
        <ul>
            <li><a href="#profile">Edit Profile</a></li>
            <li><a href="#address">Manage Address</a></li>
            <li><a href="#payment">Payment Method</a></li>
            <li><a href="#password">Change Password</a></li>
            <li><a href="#feedback">Feedback</a></li>
        </ul>
    </div>

    <div id="content">
        <div id="profile" class="info">
            <div class="profileInfo">
                <h2>Edit Profile</h2>
                <h4>Name :</h4>
                <div class="" id="name">Jack</div>
                <h4>Date of Birth :</h4>
                <div id="birthDate">2000-12-12</div>
                <h4>Gender :</h4>
                <div id="gender">Male</div>
                <h4>Phone Number :</h4>
                <div id="phone">87654321</div>
                <button class="editBtn" id="editProfile" onclick="editProfile()">Edit</button>
            </div>
        </div>

        <div id="address" class="info">
            <div class="profileInfo" id="manageAdd">
                <h2>Manage Address</h2>
                <div class="address">
                    <div class="addName" id='addName0'>May</div>
                    <div class="addPhone" id='addPhone0'>87654321</div>
                    <div class="addDetail" id='addDetail0'>20 Nanyang Avenue 654876</div>
                </div>
            </div>
            <button class="editBtn" id="editAddress" onclick="editAddress()">Edit</button>
<!--            <button class="editBtn" id="addAddress" onclick="addAddress()">Add</button>-->
        </div>

        <div id="payment" class="info">
            <div class="profileInfo" id="managePayment">
                <h2>Payment Method</h2>
                <div class="payment">
                    <h3>Credit card: </h3>
                    <div class="cardNo" id='cardNo0'>1234-5678-1234</div>
                </div>
            </div>
            <button class="editBtn" id="editPayment" onclick="editPayment()">Edit</button>
<!--            <button class="editBtn" id="addPayment" onclick="addPayment()">Add</button>-->
        </div>

        <div id="password" class="info">
            <div class="profileInfo" id="managePassword">
                <h2>Change Password</h2>
                <div class="password">
                    <h4>New Password: </h4>
                    <div class="passwordField" id='newPass'>
                        <input type="text" placeholder=" Enter password" id="newPassIn" disabled>
                    </div>
                    <h4>Confirm New Password: </h4>
                    <div class="passwordField" id='confirmPass'>
                        <input type="text" placeholder=" Confirm password" id="confirmPassIn" disabled>
                    </div>
                </div>
            </div>
            <button class="editBtn" id="editPassword" onclick="editPassword()">Edit</button>
        </div>

        <div id="feedback" class="info">
            <div class="profileInfo" id="sendFeedback">
                <h2>Feedback</h2>
                <div class="password">
                    <textarea placeholder="Enter feedback" id="newFeedback" rows="10" cols="50" maxlength="200"></textarea>
                </div>
            </div>
            <button class="editBtn" id="sendFeedbackbtn">Send </button>
        </div>

    </div>
</div>

<?php
    include_once("footer.php");
?>