<div class="col-lg-6">
<div class="loan_all loan_personal">
<h2>Personal Information</h2>
<label> Full Name<span class="required">*</span>
    [text* FullName] </label>

<label> Mobile Number<span class="required">*</span>
    [tel* MobileNumber id:mobile_number]</label>

<label> Current Home Address<span class="required">*</span>
[textarea* CurrentHomeAddress id:current_home_address]</label>

<label> Residence Type<span class="required">*</span>
[select* ResidenceType id:residence_type include_blank "Own " "Parent" "Relative" "Renting" "Company"]</label>

<label> Years Of Stay<span class="required">*</span>
[select* YearsOfStay id:years_of_stay include_blank "< 1 year" "1 - 5 years" "6 - 10 years" "> 10 years"]</label>

<label> Status<span class="required">*</span>
[select* Status id:status include_blank "Single" "Married"]</label>
</div>
</div>


<div class="col-lg-6">
<div class="loan_all loan_company col-lg-6">
<h2>Company Information</h2>
<label> Company Name<span class="required">*</span>
[text CompanyName id:company_name]</label>

<label> Company Address<span class="required">*</span>
[textarea* CompanyAddress id:company_address]</label>

<label> Contact Number<span class="required">*</span>
[tel CompanyContact id:company_contact]</label>

<label> Employment Status<span class="required">*</span>
[select* EmploymentStatus id:employment_status include_blank "Employed" "Self-Employed"]</label>

<label> Years Of Service<span class="required">*</span>
[select* YearsOfService id:years_of_service_company include_blank "< 3 Months" "< 1 Year" "1 - 5 Years" "6 - 10 Years" "> 10 Years"]</label>

<label>Job Position/Department<span class="required">*</span>
[text* JobPositionDepartment id:position_department akismet:author]</label>
</div>
</div>


<div class="col-lg-6">
<div class="loan_all loan col-lg-6">
<h2>Loan Information</h2>
<label> Bike Registration Number<span class="required">*</span>
[text* BikeRegistrationNumber id:bike_registration_number]</label>

<label> Bike Condition<span class="required">*</span>
[select* BikeCondition id:bike_condition include_blank "New" "Used"]</label>

<label> Downpayment<span class="required">*</span>
[text Downpayment id:downpayment]</label>

<label> Instalment Period<span class="required">*</span>
[select* InstalmentPeriod id:instalment_period include_blank "12 Months" "24 Months" "36 Months" "48 Months" "60 Months" "72 Months" "84 Months"]</label>

<label>Preferred Location For Bike Collection<span class="required">*</span>
[select* PreferredLocationForBikeCollection id:bike_collect_location include_blank "Batu Cave" "Ampang" "Batang Kali"]</label>
</div>
</div>



[submit "Send"]