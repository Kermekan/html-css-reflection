<?php include ('inc/resources/connection.php');?>

<form id="contact-form" class="contact--form flex" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <?php include ('inc/resources/form-submit.php');?>
    
    <div class="input-container">
        <div class="input-group flex">
            <!-- Name -->
            <div class="input-wrapper name">
                <label for="full-name" class="required">
                    Your Name
                </label>
                <input type="text" id="full-name" name ="fullName" value="<?= $fullName?>">
            </div>
            <!-- Company Name -->
            <div class="input-wrapper company">
                <label for="company-name" class="">
                    Company Name
                </label>
                <input type="text" id="company-name" name="companyName" value="<?= $companyName?>">
            </div>
            <!-- Email -->
            <div class="input-wrapper email">
                <label for="email" class="required">
                    Your Email
                </label>
                <input type="email" id="email" name="email" value="<?= $email ?>">
            </div>
            <!-- Phone -->
            <div class="input-wrapper phone">
                <label for="telephone" class="required">
                    Your Telephone Number
                </label>
                <input type="text" id="telephone" name="telephone" value="<?= $telephone?>">
            </div>
        </div><!-- .input-group -->
        <!-- Subject -->
        <div class="input-wrapper subject">
            <label for="subject" class="required">
                Subject
            </label>
            <input type="text" id="subject" name="subject" value="<?= $subject?>">
        </div>
        <!-- Message -->
        <div class="input-wrapper message">
            <label for="message" class="required">
                Message
            </label>
            <textarea name="message" id="message" value="" ><?= $message?></textarea>
        </div>
    </div><!-- .input-container -->
    <!-- checkbox & info -->
    <div class="label contacts flex">
        <label for="marketing" class="flex">
            <span class="check-holder flex">
                <!-- checkbox -->
                <span class="checkbox">
                    <input type="checkbox" id="marketing" class="cb">
                    <span class="check">
                    </span>
                </span>
            </span>
            <!-- Text -->
            <div class="text">
                Please tick this box if you wish to receive marketing information
                from us. Please see our <a href="#">Privacy Policy</a> for more
                information on how we use your data.
            </div>
        </label>
    </div><!-- .label -->
    <button type="submit" id="form-submit" name="submit" class="btn form-submit flex text-uppercase">send enquiry</button>
    
</form>


