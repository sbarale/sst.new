  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCvjS6sci72Z4vT-2Nq-WXhFFXRe5tz0hc",
    authDomain: "jacuzzi-site.firebaseapp.com",
    databaseURL: "https://jacuzzi-site.firebaseio.com",
    projectId: "jacuzzi-site",
    storageBucket: "jacuzzi-site.appspot.com",
    messagingSenderId: "179954212974"
  };
 
 firebase.initializeApp(config);

// forms list
 let forms = ["sticky_form", "hero_form","subfooter_form","specials_form","contact_form"];
        
 // Add listeners on form
for(let i = 0; i < forms.length; i++) {
    let el = document.getElementById(forms[i]);
    if(!el) continue;
    el.addEventListener('submit', collectData);
}

function collectData(e) {
    e.preventDefault();
    $('#' + this.getAttribute('id')).data('bValidator').validate();
    let validStatus = $('#' + this.getAttribute('id')).data('bValidator').isValid();
    if(validStatus) {
        let data = {
            firstName: this.querySelector('input[name=Field1]').value,
            lastName: this.querySelector('input[name=Field2]').value,
            email: this.querySelector('input[name=Field3]').value,
            tel: this.querySelector('input[name=Field4]').value,
            zip: this.querySelector('input[name=Field5]').value
        };
        sendFormData(data, this);
    }
}

function sendFormData(data, form) {
    firebase.database().ref().push(data)
        .then(()=>{
            let inputs = [].slice.call(form.querySelectorAll('input'));
            for(let i = 0; i < inputs.length; i++) {
                inputs[i].value = '';
            }
            alert('Thank you for sending us your information! A representative will be contacting you shortly.')
        })
 }


  