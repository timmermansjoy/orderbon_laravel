@push('head')
<style>
    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    .invalid {
        background: linear-gradient(0deg, rgba(207, 54, 54, 1) 0%, rgb(245, 152, 152) 31%, rgba(255, 255, 255, 1) 33%);
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }
</style>
@endpush

<div class="tab">
    @include('pages.orders.formtabs.tab1')
</div>

<div class="tab">
    @include('pages.orders.formtabs.tab2')
</div>

<div class="tab">
    @include('pages.orders.formtabs.tab3')
</div>


<div style="overflow:auto">
    <div style="float:right">
        <button class="btn btn-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        <button class="btn btn-primary" id="submitBtn">Submit</button>
    </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
</div>

@push('scripts')
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        const x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n === 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n === (x.length - 1)) {
            //document.getElementById("nextBtn").innerHTML = "Submit";
            document.getElementById("nextBtn").hidden = true;
            document.getElementById("submitBtn").hidden = false;
        } else {
            //document.getElementById("nextBtn").innerHTML = "Next";
            document.getElementById("nextBtn").hidden = false;
            document.getElementById("submitBtn").hidden = true;
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        const x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n === 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        let i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";

    }

    function validateForm() {
        // This function deals with validation of the form fields
        let x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByClassName("required");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
            else{
                y[i].classList.remove("invalid");
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }
</script>
@endpush
