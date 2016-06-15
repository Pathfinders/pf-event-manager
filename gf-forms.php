<?php
$gf_event_filtering = '
{"0":{"title":"Event Filtering","description":"","labelPlacement":"top_label","descriptionPlacement":"below","button":{"type":"text","text":"Update Listings","imageUrl":""},"fields":[{"type":"text","id":1,"label":"Keywords","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":null,"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Keywords","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":true,"formId":500,"description":"","inputType":"","cssClass":"","inputName":"keywords","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","displayOnly":""},{"type":"select","id":2,"label":"Time","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":null,"choices":[{"text":"Any Time","value":"All","isSelected":false,"price":""},{"text":"This Week","value":"Week","isSelected":false,"price":""},{"text":"This Month","value":"Month","isSelected":false,"price":""}],"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Timeframe","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":true,"enableChoiceValue":true,"formId":5,"description":"","inputType":"","cssClass":"","inputName":"timeframe","adminOnly":false,"noDuplicates":false,"defaultValue":"","conditionalLogic":"","displayOnly":""},{"type":"select","id":3,"label":"Category","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":null,"choices":[{"text":"Category","value":""},{"value":"12","text":"Animal"},{"value":"14","text":"Art Exhibits"},{"value":"11","text":"Arts and Crafts"},{"value":"13","text":"Auctions"},{"value":"15","text":"Boat Show\/Boat Races"},{"value":"16","text":"Car Show"},{"value":"17","text":"Carnival"},{"value":"18","text":"Community"},{"value":"19","text":"Educational"},{"value":"20","text":"Environment\/Nature"},{"value":"21","text":"Ethnic"},{"value":"22","text":"Exhibits"},{"value":"23","text":"Fairs"},{"value":"24","text":"Farmers Markets"},{"value":"25","text":"Festivals"},{"value":"26","text":"Food\/Beverage"},{"value":"27","text":"Historical"},{"value":"28","text":"Hobby Show"},{"value":"29","text":"Holiday"},{"value":"30","text":"Home &amp; Gardens"},{"value":"31","text":"Motorcycle Show"},{"value":"39","text":"Other"},{"value":"32","text":"Performing Arts"},{"value":"33","text":"Religious"},{"value":"34","text":"RV Shows &amp; Rallies"},{"value":"35","text":"Sporting Events Participant"},{"value":"36","text":"Sporting Events Spectator"},{"value":"37","text":"Swap Meets"},{"value":"38","text":"Tradeshows"}],"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":true,"enableChoiceValue":true,"formId":5,"description":"","inputType":"","cssClass":"","inputName":"category","adminOnly":false,"noDuplicates":false,"defaultValue":"","conditionalLogic":"","displayOnly":"","populateTaxonomy":"event-category"},{"type":"select","id":6,"label":"Region","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":null,"choices":[{"text":"Region","value":"","isSelected":false},{"value":"54","text":"Amish Backroads","isSelected":false},{"value":"40","text":"Downtown Shipshewana","isSelected":false},{"value":"58","text":"Indiana Dunes","isSelected":false},{"value":"56","text":"Lakes &amp; Nature Preserves","isSelected":false},{"value":"59","text":"Northern Indiana","isSelected":false},{"value":"55","text":"Quilt Gardens Along the Heritage Trail","isSelected":false},{"value":"60","text":"Shipshewana\/LaGrange County","isSelected":false},{"value":"57","text":"South Bend &amp; Notre Dame","isSelected":false}],"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":true,"enableChoiceValue":true,"formId":5,"description":"","inputType":"","cssClass":"","inputName":"region","adminOnly":false,"noDuplicates":false,"defaultValue":"","conditionalLogic":"","displayOnly":"","populateTaxonomy":"regions"},{"type":"select","id":4,"label":"Event Length","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":null,"choices":[{"text":"Limited: 1 - 4 Days","value":"Limited","isSelected":false,"price":""},{"text":"Intermediate: 5 - 31 Days","value":"Intermediate","isSelected":false,"price":""},{"text":"Extended: 32+ Days","value":"Extended","isSelected":false,"price":""}],"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Event Length","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":true,"enableChoiceValue":true,"formId":5,"description":"","inputType":"","cssClass":"","inputName":"length","adminOnly":false,"noDuplicates":false,"defaultValue":"","conditionalLogic":"","displayOnly":""},{"type":"html","id":5,"label":"","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":null,"displayOnly":true,"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"content":"<a href=\"\/dev\/events\" class=\"button\">Reset<\/a>","formId":5,"description":"","inputType":"","cssClass":"","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":""},{"type":"hidden","id":7,"label":"Origin URL","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":null,"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"defaultValue":"{embed_url}","formId":5,"description":"","inputType":"","cssClass":"","inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","displayOnly":""}],"version":"1.9.19","id":5,"useCurrentUserAsAuthor":true,"postContentTemplateEnabled":false,"postTitleTemplateEnabled":false,"postTitleTemplate":"","postContentTemplate":"","lastPageButton":null,"pagination":null,"firstPageCssClass":null,"subLabelPlacement":"below","cssClass":"no-labels","enableHoneypot":true,"enableAnimation":true,"save":{"enabled":false,"button":{"type":"link","text":"Save and Continue Later"}},"limitEntries":false,"limitEntriesCount":"","limitEntriesPeriod":"","limitEntriesMessage":"","scheduleForm":false,"scheduleStart":"","scheduleStartHour":"","scheduleStartMinute":"","scheduleStartAmpm":"","scheduleEnd":"","scheduleEndHour":"","scheduleEndMinute":"","scheduleEndAmpm":"","schedulePendingMessage":"","scheduleMessage":"","requireLogin":false,"requireLoginMessage":"","confirmations":[{"id":"56b51bb41d79d","name":"Default Confirmation","isDefault":true,"type":"redirect","message":"","url":"{Origin URL:7}","pageId":0,"queryString":"keywords={Keywords:1:value}&timeframe={Time:2:value}&category={Category:3:value}&region={Region:6:value}&length={Event Length:4:value}","disableAutoformat":false,"conditionalLogic":[]}],"notifications":[{"id":"56b51bb41d556","to":"{admin_email}","name":"Admin Notification","event":"form_submission","toType":"email","subject":"New submission from {form_title}","message":"{all_fields}","isActive":false}]},"version":"1.9.19"}
';
$gf_submit_an_event = '
{"0":{"title":"Submit an Event","description":"","labelPlacement":"top_label","descriptionPlacement":"below","button":{"type":"text","text":"Submit for Approval","imageUrl":""},"fields":[{"type":"post_title","id":1,"label":"Event Name","adminLabel":"","isRequired":true,"size":"medium","errorMessage":"","inputs":null,"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Event Name","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"saveAsCPT":"events","formId":6,"description":"","inputType":"","cssClass":"","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"post_image","id":19,"label":"Featured Image","adminLabel":"","isRequired":true,"size":"medium","errorMessage":"","inputs":null,"allowedExtensions":"jpg, jpeg, png, gif","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"postFeaturedImage":true,"formId":6,"description":"Minimum image size should be 400px wide x 200px high in .JPG or .PNG format only. Image dimensions should not exceed 1200px x 600px.","inputType":"","cssClass":"","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","maxFileSize":"","displayOnly":""},{"type":"post_content","id":2,"label":"Description","adminLabel":"","isRequired":true,"size":"large","errorMessage":"","inputs":null,"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Description","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"formId":6,"description":"","inputType":"","cssClass":"","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"select","id":3,"label":"Event Category","adminLabel":"","isRequired":true,"size":"large","errorMessage":"","inputs":null,"choices":[{"text":"-- select a Event Category --","value":""},{"value":"12","text":"Animal"},{"value":"14","text":"Art Exhibits"},{"value":"11","text":"Arts and Crafts"},{"value":"13","text":"Auctions"},{"value":"15","text":"Boat Show\/Boat Races"},{"value":"16","text":"Car Show"},{"value":"17","text":"Carnival"},{"value":"18","text":"Community"},{"value":"19","text":"Educational"},{"value":"20","text":"Environment\/Nature"},{"value":"21","text":"Ethnic"},{"value":"22","text":"Exhibits"},{"value":"23","text":"Fairs"},{"value":"24","text":"Farmers Markets"},{"value":"25","text":"Festivals"},{"value":"26","text":"Food\/Beverage"},{"value":"27","text":"Historical"},{"value":"28","text":"Hobby Show"},{"value":"29","text":"Holiday"},{"value":"30","text":"Home &amp; Gardens"},{"value":"31","text":"Motorcycle Show"},{"value":"39","text":"Other"},{"value":"32","text":"Performing Arts"},{"value":"33","text":"Religious"},{"value":"34","text":"RV Shows &amp; Rallies"},{"value":"35","text":"Sporting Events Participant"},{"value":"36","text":"Sporting Events Spectator"},{"value":"37","text":"Swap Meets"},{"value":"38","text":"Tradeshows"}],"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Event Category","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"populateTaxonomy":"event-category","formId":6,"description":"","inputType":"","cssClass":"col-md-6","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"select","id":4,"label":"Region","adminLabel":"","isRequired":true,"size":"large","errorMessage":"","inputs":null,"choices":[{"text":"-- select a Region --","value":""},{"value":"54","text":"Amish Backroads"},{"value":"40","text":"Downtown Shipshewana"},{"value":"58","text":"Indiana Dunes"},{"value":"56","text":"Lakes &amp; Nature Preserves"},{"value":"59","text":"Northern Indiana"},{"value":"55","text":"Quilt Gardens Along the Heritage Trail"},{"value":"60","text":"Shipshewana\/LaGrange County"},{"value":"57","text":"South Bend &amp; Notre Dame"}],"formId":6,"description":"","allowsPrepopulate":false,"inputMask":false,"inputMaskValue":"","inputType":"","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Region","cssClass":"col-md-6","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","conditionalLogic":"","displayOnly":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"populateTaxonomy":"regions","postFeaturedImage":false},{"type":"post_custom_field","id":5,"label":"Start Date","adminLabel":"","isRequired":true,"size":"medium","errorMessage":"","inputs":null,"inputType":"date","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Start Date","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"defaultValue":"","description":"","dateType":"datepicker","calendarIconType":"calendar","calendarIconUrl":"","postCustomFieldName":"start_date","formId":6,"cssClass":"col-md-4","inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","dateFormat":"ymd_dash","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":6,"label":"End Date","adminLabel":"","isRequired":true,"size":"medium","errorMessage":"","inputs":null,"inputType":"date","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"End Date","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"defaultValue":"","description":"","dateType":"datepicker","calendarIconType":"calendar","calendarIconUrl":"","postCustomFieldName":"end_date","formId":6,"cssClass":"col-md-4","inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","dateFormat":"ymd_dash","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":7,"label":"All Day Event","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":[{"id":"7.1","label":"Check if this is an all-day event","name":""}],"inputType":"checkbox","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"All Day Event","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"choices":[{"text":"Check if this is an all-day event","value":"true","isSelected":false,"price":""}],"defaultValue":"","description":"","postCustomFieldName":"all_day_event","enableChoiceValue":true,"formId":6,"cssClass":"col-md-4","inputName":"","adminOnly":false,"noDuplicates":false,"conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":20,"label":"Repeating Event?","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":[{"id":"20.1","label":"Yes","name":""}],"inputType":"checkbox","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"choices":[{"text":"Yes","value":"1","isSelected":false,"price":""}],"defaultValue":"","description":"","postCustomFieldName":"repeating_event","enableChoiceValue":true,"formId":6,"cssClass":"col-md-12","inputName":"","adminOnly":false,"noDuplicates":false,"conditionalLogic":{"actionType":"hide","logicType":"all","rules":[{"fieldId":"22","operator":"is","value":"1"}]},"displayOnly":""},{"type":"post_custom_field","id":21,"label":"Repeating Days","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":[{"id":"21.1","label":"Sunday","name":""},{"id":"21.2","label":"Monday","name":""},{"id":"21.3","label":"Tuesday","name":""},{"id":"21.4","label":"Wednesday","name":""},{"id":"21.5","label":"Thursday","name":""},{"id":"21.6","label":"Friday","name":""},{"id":"21.7","label":"Saturday","name":""}],"inputType":"checkbox","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"choices":[{"text":"Sunday","value":"Sunday","isSelected":false,"price":""},{"text":"Monday","value":"Monday","isSelected":false,"price":""},{"text":"Tuesday","value":"Tuesday","isSelected":false,"price":""},{"text":"Wednesday","value":"Wednesday","isSelected":false,"price":""},{"text":"Thursday","value":"Thursday","isSelected":false,"price":""},{"text":"Friday","value":"Friday","isSelected":false,"price":""},{"text":"Saturday","value":"Saturday","isSelected":false,"price":""}],"defaultValue":"","description":"","postCustomFieldName":"repeating_days","enableChoiceValue":false,"conditionalLogic":{"actionType":"show","logicType":"all","rules":[{"fieldId":"20","operator":"is","value":"1"},{"fieldId":"22","operator":"isnot","value":"1"}]},"formId":6,"cssClass":"col-md-8","inputName":"","adminOnly":false,"noDuplicates":false,"displayOnly":""},{"type":"post_custom_field","id":22,"label":"Recurring Event: Non-Consecutive Days?","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":[{"id":"22.1","label":"Yes","name":""}],"inputType":"checkbox","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"choices":[{"text":"Yes","value":"1","isSelected":false,"price":""}],"defaultValue":"","description":"(ex: Monday one week, Wednesday another, Thursday the next)  Be sure to list out the dates in the description.","postCustomFieldName":"recurring_event_non-consecutive_days","enableChoiceValue":true,"formId":6,"cssClass":"col-md-12","inputName":"","adminOnly":false,"noDuplicates":false,"conditionalLogic":"","displayOnly":""},{"type":"post_custom_field","id":8,"label":"Start Time","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":[{"id":"8.1","label":"HH","name":""},{"id":"8.2","label":"MM","name":""},{"id":"8.3","label":"AM\/PM","name":""}],"inputType":"time","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"defaultValue":"","description":"","postCustomFieldName":"start_time","formId":6,"cssClass":"col-md-5","inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","timeFormat":"12","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":9,"label":"End Time","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":[{"id":"9.1","label":"HH","name":""},{"id":"9.2","label":"MM","name":""},{"id":"9.3","label":"AM\/PM","name":""}],"inputType":"time","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"defaultValue":"","description":"","postCustomFieldName":"end_time","formId":6,"cssClass":"col-md-5","inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","timeFormat":"12","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":10,"label":"Location Name","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":null,"inputType":"text","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Location Name","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"postCustomFieldName":"location_name","cssClass":"col-md-7","formId":6,"description":"","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":11,"label":"Location Address","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":null,"inputType":"textarea","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Location Address","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"defaultValue":"","description":"","cssClass":"col-md-7","postCustomFieldName":"location_address","formId":6,"inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":12,"label":"Contact Name","adminLabel":"","isRequired":true,"size":"large","errorMessage":"","inputs":null,"inputType":"text","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"Contact Name","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"postCustomFieldName":"contact_name","cssClass":"col-md-6","formId":6,"description":"","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":13,"label":"Contact Email Address","adminLabel":"","isRequired":true,"size":"large","errorMessage":"","inputs":null,"inputType":"email","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"defaultValue":"","description":"","cssClass":"col-md-6","formId":6,"inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","displayOnly":"","postCustomFieldName":"contact_email_address","postFeaturedImage":false},{"type":"post_custom_field","id":14,"label":"Contact Phone Number","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":null,"inputType":"phone","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"phoneFormat":"standard","defaultValue":"","description":"","postCustomFieldName":"contact_phone_number","cssClass":"col-md-6","formId":6,"inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":15,"label":"Contact Website","adminLabel":"","isRequired":false,"size":"large","errorMessage":"","inputs":null,"inputType":"website","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"http:\/\/","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"defaultValue":"","description":"","postCustomFieldName":"contact_website","cssClass":"col-md-6","formId":6,"inputName":"","adminOnly":false,"noDuplicates":false,"choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":16,"label":"Admission Fee","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":null,"inputType":"text","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"postCustomFieldName":"admission_fee","cssClass":"col-md-7","formId":6,"description":"","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"post_custom_field","id":17,"label":"Listing URL","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":null,"inputType":"text","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"cssClass":"col-md-7","description":"Put the relative path of the listing URL here (ex. \/listing\/2471\/The+Round+Barn+Theatre+at+Amish+Acres\/ )","postCustomFieldName":"listing_url","formId":6,"inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","displayOnly":"","postFeaturedImage":false},{"type":"html","id":18,"label":"HTML Block","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","inputs":null,"displayOnly":true,"labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":"","disableQuantity":false,"displayAllCategories":false,"inputMask":false,"inputMaskValue":"","allowsPrepopulate":false,"content":"<div class=\"cl\"><\/div>","formId":6,"description":"","inputType":"","cssClass":"","inputName":"","adminOnly":false,"noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","postFeaturedImage":false}],"version":"1.9.19","id":6,"subLabelPlacement":"below","cssClass":"","enableHoneypot":true,"enableAnimation":true,"save":{"enabled":false,"button":{"type":"link","text":"Save and Continue Later"}},"limitEntries":false,"limitEntriesCount":"","limitEntriesPeriod":"","limitEntriesMessage":"","scheduleForm":false,"scheduleStart":"","scheduleStartHour":"","scheduleStartMinute":"","scheduleStartAmpm":"","scheduleEnd":"","scheduleEndHour":"","scheduleEndMinute":"","scheduleEndAmpm":"","schedulePendingMessage":"","scheduleMessage":"","requireLogin":false,"requireLoginMessage":"","useCurrentUserAsAuthor":true,"postContentTemplateEnabled":false,"postTitleTemplateEnabled":false,"postTitleTemplate":"","postContentTemplate":"","lastPageButton":null,"pagination":null,"firstPageCssClass":null,"postAuthor":"1","postCategory":"43","postFormat":"0","postStatus":"pending","confirmations":[{"id":"56b527b06c274","name":"Default Confirmation","isDefault":true,"type":"message","message":"Thanks for contacting us! We will get in touch with you shortly.","url":"","pageId":"","queryString":""}],"notifications":[{"isActive":true,"id":"56b527b06c03d","name":"Admin Notification","service":"wordpress","event":"form_submission","to":"patti@lagrangecountycvb.org","toType":"email","bcc":"","subject":"Pending Event submission from {form_title}","message":"{all_fields}\r\n\r\nLog on to approve this event: {post_edit_url}","from":"{Contact Email Address:13}","fromName":"{Contact Name:12}","replyTo":"{Contact Email Address:13}","routing":null,"conditionalLogic":null,"disableAutoformat":false}]},"version":"1.9.19"}
';
?>