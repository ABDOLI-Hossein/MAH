   <div class="saModal message_modal">
                    <div class="message_modal_content">
						<h6 class="form_title">
						 	 Message
						</h6>
                        <form action="" class="message_content_form">
                            <label for="message_name">Name:<span>*</span></label><br>
                            <input type="text" class="message_name" name="name"><br>

                            <label for="message_phone">Phone:<span>*</span></label><br>
                            <input type="text" class="message_phone" name="phone"><br>

                            <label for="message_email">Email:<span>*</span></label><br>
                            <input type="email" class="message_email" name="email"><br>

                            <label for="message_message">Message:<span>*</span></label><br>
                            <textarea  class="message_message" cols="30" rows="5"></textarea>


                            <input type="submit" value="Send" class="submit_form_message">
                        </form>
                    </div>
   </div>






<div class="saModal request_modal">
                <div class="request_modal_content">
					<h6 class="form_title">
						 Request Appointment
					</h6>
                    <form action="" class="request_modal_form">
                        <label for="name">Name:<span>*</span></label><br>
                        <input type="text" id="request_name" name="fname"><br>

                        <label for="PatientType">Patient Type<span>*</span></label><br>
                        <select name="PatientType" id="PatientType">
                            <option value="new-patient" selected="selected">New Patient</option>
                            <option value="returning-patient">Returning Patient</option>
                            <option value="current-patient">Current Patient</option>
                        </select><br>

                        <label for="pname">Phone:<span>*</span></label><br>
                        <input type="phone" id="request_phone" name="lname"><br>

                        <label for="email">Email:<span>*</span></label><br>
                        <input type="phone" id="request_email" name="lname"><br>


                        <label for="email">Preferred Date:<span>*</span></label><br>
                        <input type="date" id="request_date" name="lname">

                        <label for="PreferredTimeOfDay">Preferred Time Of Day<span>*</span></label><br>
                        <select name="PreferredTimeOfDay" id="PreferredTimeOfDay">
                            <option value="morning" selected="selected">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select><br>

                        <label for="message">Comments:<span>*</span></label><br>
                        <textarea  id="request_comment" cols="30" rows="3"></textarea>


                        <input type="submit" value="Send" id="submit_form_request">
                    </form>
                </div>
            </div>
</div>
<!-- developed by => saaa.pro -->
<footer class="per-10">
    <h6>Copyright 2021 Mabry Animal Hospital, All Rights Reserved. Design by <a target="_blank" style="color: #fff;" href="https://nexmark.io/"><b>NexMark Studios<b></b></a></h6>
</footer>
	






<?php wp_footer();?>

</body>
</html>