<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
var subjectObject = {
  "DEX": {
    "Business Operation": ["Business Analyst", "Junior Engineer", "Vice President", ],
    "Business Solutions": ["Manager", "Senior Executive"],
    "Business Support": ["Officer", "Executive", "Senior Executive", "Assistant Manager", ],
    "Channel": ["Executive", "Team lead", "Assistant Manager", "Channel Manager","Senior Manager", ],
    "Content" : ["Officer","Senior Officer","Executive","Associate",],
    "DEX" : ["Executive Vice President and Chief Business Officer"],
    "Exam Result Processing" : ["Officer","Associate Test Analyst","Engineer","Senior Officer","Senior Engineer","Senior Executive","Deputy General Manager","Manager",],
    "HO Operations" : ["Senior Officer","Executive","Assistant Manager","General Manager","Deputy General Manager",],
    "Quality and Training" : ["Trainee","Executive","Senior Executive","Assistant Manager","Leader","Manager",],
    "Regional IT" : ["Consultant","Engineer","Senior Engineer","Team lead","Associate","Project Lead",],
    "Sales" : ["Deputy General Manager","Assistant Vice President","Manager",],
    "Vigilence" : ["Officer" , "Associate" , "Manager"]    
        
        
        
        },
  "Digital": {
    "CCS": ["Junior Engineer","Business Analyst","Asst. Team Lead","Business Analyst","Team lead","Senior Manager",],
    "Digital Delivery": ["Consultant","Trainee Associate Production Support","Associate Systems Analyst","Associate Systems Analyst","Associate Test Analyst","Business Analyst","Jr. Engineer","Junior Engineer","Officer","Traine Associate Test Analyst","Trainee Associate Application Support","Associate Systems Analyst","Associate Test Analyst","Business Analyst","Data Analyst","Engineer","Senior Executive","Senior Officer","UI Developer","Associate Systems Analyst","Associate Test Analyst","Business Analyst","Engineer","Executive","Senior Engineer","Senior Sales Manager","UX Designer","Account Manager","Business Analyst","Senior Business Analyst","Senior Consultant","Senior Executive","Senior UI Designer","Sr. Quality Analyst","Technical Lead","Test Analyst","Business Analyst","Leader","Manager","Module Lead","Officer","Senior Business Analyst","Technical Lead","Delivery Leader","Vice President","Vice President II - Digital","Vice President","Manager","Senior Business Analyst","Deputy General Manager","Senior Sales Manager","Deputy General Manager","Account Manager","Assistant Manager","Business Analyst","Business Analyst","Technical Lead",],
    "Digital Sales": ["Officer","Senior Engineer","Officer","Manager - Bid Management","AVP II - Bid Management",],
    "Infrastructure" : ["Consultant","Trainee Associate Production Support","Associate Systems Analyst","Junior Engineer","Trainee Associate Production Support","Engineer","Associate Systems Analyst","Senior Systems Analyst","Trainee Associate Production Support","Associate Systems Analyst","Project Manager","Practice Lead","Project Manager",],



  },


  "Support" : {
    "Accounts Receivables" : ["Executive","Sr.Officer","Assistant Manager",],
    "Admin" : ["Office Assistant","Senior Driver","Executive","Secretary","Senior Executive","Associate","Assistant Manager","Senior Executive",],
    "Business Excellence" : ["Engineer"],
    "CEO's Office" : ["Executive Vice Chairman"], 
    "DEX Development" : ["Engineer" , "Senior Executive" , "Project Manager" ] , 
    "Finance And Accounts" : ["Sr. Vice President II & Chief Financial Officer" , "Senior Manager" , "Deputy General Manager"],
    "GST" : ["GST"],
    "Human Resource Department" : ["Head HR"],
    "IT and Infra" : ["Engineer","Junior Engineer","Cyber Security Consultant","Senior Engineer","Technical Lead","Project Manager","Project Lead","Project Manager",],
    "Legal & Secretarial" : ["Executive","Manager","Manager & Company Secretary",],
    "MIS" : ["Assistant Manager"],
    "Payroll" : ["Senior Executive" , "Associate" ],
    "Production Support" : ["Business Analyst","Associate Test Analyst","Test Analyst","Leader","Senior Project Manager",],
    "Service Delivery" : ["Business Analyst","Officer","Trainee Associate Systems Analyst","Senior Officer","Executive","Business HR - Service Delivery","Senior Executive","Assistant Manager","Associate","Manager","Senior Manager","Business HR - Service Delivery",],
    "Strategy" : ["Senior Consultant"],
    "Talent Acquisition" : ["Head Talent Acquisition","Leader","Senior Executive","Deputy General Manager","Associate","Senior Manager","Head Talent Acquisition","Assistant Manager","Senior Manager",],
    "Technology & Innovation" : ["Chief Technology Officer"],

  }

  
}
window.onload = function() {
  var subjectSel = document.getElementById("bu");
  var topicSel = document.getElementById("dept");
  var chapterSel = document.getElementById("desgn");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);

  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }

  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    console.log(z);
    console.log(topicSel)

    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);

    }
  }
}
</script>
</head>   
<body>

<h1>Jarvis' RolesFinder</h1>

<form name="form1" id="form1"  method = "POST" action="rolefinder.php">
BU: <select name="bu" id="bu">
    <option value="" selected="selected">Select BU</option>
  </select>
  <br><br>
Department: <select name="dept" id="dept">
    <option value="" selected="selected">Please select BU First</option>
  </select>
  <br><br>
Designation: <select name="desgn" id="desgn">
    <option value="" selected="selected">Please select Department first</option>
  </select>

  Grade: <select name="grade" id="grade">
  <option value="C10"selected="selected">C10</option>
<option value="CEO"selected="selected">CEO</option>
<option value="Con"selected="selected">Con</option>
<option value="E10"selected="selected">E10</option>
<option value="E11"selected="selected">E11</option>
<option value="E20"selected="selected">E20</option>
<option value="E21"selected="selected">E21</option>
<option value="E30"selected="selected">E30</option>
<option value="E40"selected="selected">E40</option>
<option value="EVC"selected="selected">EVC</option>
<option value="F00"selected="selected">F00</option>
<option value="L10"selected="selected">L10</option>
<option value="L15"selected="selected">L15</option>
<option value="L16"selected="selected">L16</option>
<option value="L20"selected="selected">L20</option>
<option value="L30"selected="selected">L30</option>
<option value="M10"selected="selected">M10</option>
<option value="M20"selected="selected">M20</option>
<option value="M30"selected="selected">M30</option>
<option value="S10"selected="selected">S10</option>

  </select>



  <br><br>
  <input type="submit" value="Submit">  
</form>

</body>
</html>
