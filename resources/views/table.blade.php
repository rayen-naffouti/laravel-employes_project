@extends('layout')   
<!-- END: Side Navigation -->
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Dashboard <small>Welcome back <span class="text-primary">Maria Fällström</span></small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
           
           
        <select id="dropdown" name="dropdown" onchange="changeHiddenInput(this)" >
            <option value="db">absence-personnel</option>
            <option value="test">personnel</option>
            <option value="test2">absence</option>
        </select>
    
        <input type="hidden" name="hiddenInput" id="hiddenInput" value="" />
    
        <a href="{{ url('/table') }}"><button type="button" class="btn btn-default" onclick="changeHiddenInput (objDropDown)">Try it</button></a>
   
      
    
    <script>
        var select;
            window.onload = function () {
            select = document.getElementById('dropdown');
            console.log(select.value);
            localStorage.setItem("someVarKey", select.value);
        }
        function changeHiddenInput(objDropDown) {
            console.log(objDropDown);
            var objHidden = document.getElementById("hiddenInput");
            objHidden.value = objDropDown.value;
            var a = objHidden.value;
            console.log(a);
            localStorage.setItem("someVarKey", a);
            result.innerHTML = a || "";
}
    </script>


  <div id="pivotContainer">The component will appear here</div>
  <script src="{{ asset('test/flexmonster/flexmonster.js') }}"></script>

  <script>
      

    var someVarName = localStorage.getItem("someVarKey");
      
    let nom = "db"
    let pivot = new Flexmonster({
        container: "pivotContainer",
        componentFolder: "test/flexmonster/",
        licenseKey: "Z7MG-XC8C0R-620519-6X486P",
        toolbar: true,
        report: {
        dataSource: {
            type: "api",
            url: "http://localhost:9500",
            index: someVarName
        }
    }
    });
  
</script>
<script src="https://cdn.flexmonster.com/flexmonster.js"></script>
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        
       