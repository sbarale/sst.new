function PrepopulateStaticData()
    {
    $("[dtype]").attr('id',function(index,id)
        {

        var select_elements = new Array();
        
        var dtype = $('#' + id).attr('dtype');
        switch ( dtype )
            {

            case 'roofshade':
                select_elements.push ( '<option value="">Roof Shade</option>' );
                select_elements.push ( '<option value="none">No Shade</option>' );
                select_elements.push ( '<option value="little">A Little Shade</option>' );
                select_elements.push ( '<option value="alot">A Lot Of Shade</option>' );
                break;

            case 'electrichomeowner':
                select_elements.push ( '<option value="">Do You Own the Home?</option>' );
                select_elements.push ( '<option value="YES">Yes, I am the homeowner</option>' );
                select_elements.push ( '<option value="NO">No, I am not the homeowner</option>' );
                select_elements.push ( '<option value="COMMERCIAL">It is a commercial space</option>' );
                break;
                                
            case 'electricbill':
                select_elements.push ( '<option value="">Monthly Electrical Bill</option>' );
                select_elements.push ( '<option value="0">$0-$49</option>' );
                select_elements.push ( '<option value="50">$50-$99</option>' );
                select_elements.push ( '<option value="100">$100-$149</option>' );
                select_elements.push ( '<option value="150">$150-$199</option>' );
                select_elements.push ( '<option value="200">$200-$299</option>' );
                select_elements.push ( '<option value="300">$300-$399</option>' );
                select_elements.push ( '<option value="400">$400-$499</option>' );
                select_elements.push ( '<option value="500">$500-$599</option>' );
                select_elements.push ( '<option value="600">$600-$699</option>' );
                select_elements.push ( '<option value="700">$700-$799</option>' );
                select_elements.push ( '<option value="800">$800+</option>' );
                break;
                
            case 'electricprovider':
                select_elements.push ( '<option value="">Current Electrical Provider</option>' );
                //select_elements.push ( '<option value="Other">Other</option>' );
                break;                
                
            case 'payperiod':
                select_elements.push ( '<option value="weekly">Weekly</option>' );
                select_elements.push ( '<option value="biweekly">Biweekly</option>' );
                select_elements.push ( '<option value="semimonthly">Semimonthly</option>' );
                select_elements.push ( '<option value="monthly">Monthly</option>' );
                break;
                
            case 'employment_type':
                select_elements.push ( '<option value="" selected="selected">-Select-</option>' );
                select_elements.push ( '<option value="employed">Employed</option>' );
                select_elements.push ( '<option value="benefits">Benefits</option>' );
                select_elements.push ( '<option value="unemployed">Unemployed</option>' );
                break;
                
            case 'timetocall':
                select_elements.push ( '<option value="" selected="selected">-Select-</option>' );
                select_elements.push ( '<option value="morning">Morning</option>' );
                select_elements.push ( '<option value="afternoon">Afternoon</option>' );
                select_elements.push ( '<option value="evening">Evening</option>' );
                break;

            case 'paymethod':
                select_elements.push ( '<option value="" selected="selected">-Select-</option>' );
                select_elements.push ( '<option value="checking">Direct Deposit</option>' );
                select_elements.push ( '<option value="paper">Paper Check</option>' );
                select_elements.push ( '<option value="other">Other</option>' );
                break;

            case 'accounttype':
                select_elements.push ( '<option value="" selected="selected">-Select-</option>' );
                select_elements.push ( '<option value="checking">Checking</option>' );
                select_elements.push ( '<option value="savings">Savings</option>' );
                break;

            case 'credit_card':
            case 'bank_account':
            case 'citizen':
            case 'military':
                select_elements.push ( '<option value="">-Choose-</option>' );
                select_elements.push ( '<option value="1">Yes</option>' );
                select_elements.push ( '<option value="0">No</option>' );
                break;
            
            case 'ownrent':
                select_elements.push ( '<option value="">--choose--</option>' );
                select_elements.push ( '<option value="rent">Rent</option>' );
                select_elements.push ( '<option value="own">Own</option>' );
                break;
                
            case 'credit_rating':
                select_elements.push ( '<option value="">Credit Rating</option>' );
                select_elements.push ( '<option value="excellent">Excellent (700+)</option>' );
                select_elements.push ( '<option value="good">Good (650+)</option>' );
                select_elements.push ( '<option value="fair">Fair (600+)</option>' );
                select_elements.push ( '<option value="poor">Poor</option>' );
                break;    
                
            case 'loan_purpose':
                select_elements.push ( '<option value="">What is it For?</option>' );
                select_elements.push ( '<option value="credit_card">Credit Card Refinancing</option>' );
                select_elements.push ( '<option value="debt_consolidation">Debt Consolidation</option>' );
                select_elements.push ( '<option value="home_improvement">Home Improvement</option>' );
                select_elements.push ( '<option value="major_purchase">Major Purchase</option>' );
                select_elements.push ( '<option value="home_buying">Home Buying</option>' );
                select_elements.push ( '<option value="auto_financing">Car Financing</option>' );
                select_elements.push ( '<option value="green_loan">Green Loan</option>' );
                select_elements.push ( '<option value="business">Business</option>' );
                select_elements.push ( '<option value="vacation">Vacation</option>' );
                select_elements.push ( '<option value="moving">Moving and Relocation</option>' );
                select_elements.push ( '<option value="medical_procedure">Medical Procedure</option>' );
                select_elements.push ( '<option value="other">Other</option>' );
                break;    

            case 'debt_payment':
            case 'loanamount':
            case 'salary':
                if ( dtype == 'salary' )
                    select_elements.push ( '<option value="">Salary</option>' );
                if ( dtype == 'loanamount' )
                    select_elements.push ( '<option value="">Amount</option>' );
                
                for ( val = 100; val <= 1000; val = val + 100 )
                    select_elements.push ( '<option value="' + val + '">$' + val + '</option>' );
                
                select_elements.push ( '<option value="1250">$1250</option>' );
                
                for ( val = 1500; val <= 5000; val = val + 500 )
                    select_elements.push ( '<option value="' + val + '">$' + val + '</option>' );

                for ( val = 6000; val <= 9000; val = val + 1000 )
                    select_elements.push ( '<option value="' + val + '">$' + val + '</option>' );

                select_elements.push ( '<option value="10000">$10000+</option>' );
                break;
                
            case 'largeloanamount':
                select_elements.push ( '<option value="">- Select -</option>' );
                
                for ( val = 3000; val <= 6000; val = val + 500 )
                    select_elements.push ( '<option value="' + val + '">$' + val + '</option>' );
                
                for ( val = 7000; val <= 35000; val = val + 1000 )
                    select_elements.push ( '<option value="' + val + '">$' + val + '</option>' );
                break;

            case 'yearsat':
                select_elements.push ( '<option value="">Yrs</option>' );
                for ( val = 0; val <= 8; val = val + 1 )
                    select_elements.push ( '<option value="' + val + '">' + val + '</option>' );
                select_elements.push ( '<option value="9">9+</option>' );
                break;
                
            case 'monthsat':
                select_elements.push ( '<option value="">Mos</option>' );
                for ( val = 0; val <= 11; val = val + 1 )
                    select_elements.push ( '<option value="' + val + '">' + val + '</option>' );
                break;

            case 'dob_month':
                select_elements.push ( '<option value="">--</option>' );
                select_elements.push ( '<option value="01">Jan</option>' );
                select_elements.push ( '<option value="02">Feb</option>' );
                select_elements.push ( '<option value="03">Mar</option>' );
                select_elements.push ( '<option value="04">Apr</option>' );
                select_elements.push ( '<option value="05">May</option>' );
                select_elements.push ( '<option value="06">Jun</option>' );
                select_elements.push ( '<option value="07">Jul</option>' );
                select_elements.push ( '<option value="08">Aug</option>' );
                select_elements.push ( '<option value="09">Sep</option>' );
                select_elements.push ( '<option value="10">Oct</option>' );
                select_elements.push ( '<option value="11">Nov</option>' );
                select_elements.push ( '<option value="12">Dec</option>' );
                break;

            case 'dob_day':
                select_elements.push ( '<option value="">--</option>' );
                for ( val = 1; val <= 31; val = val + 1 )
                    {
                    cval = val;
                    if ( val < 10 )
                        cval = '0' + val;
                    select_elements.push ( '<option value="' + cval + '">' + val + '</option>' );
                    }
                break;
                
            case 'dob_year_18+':
                select_elements.push ( '<option value="">--</option>' );

                var new_date = new Date();
                for ( start_year = new_date.getFullYear() - 17; start_year > new_date.getFullYear() - 100; start_year = start_year - 1 )
                    select_elements.push ( '<option value="' + start_year + '">' + start_year + '</option>' );
                break;

            case 'statelist_abbreviation':
                select_elements.push ( '<option value="">State</option>' );
                select_elements.push ( '<option value="AK">AK</option>' );
                select_elements.push ( '<option value="AL">AL</option>' );
                select_elements.push ( '<option value="AR">AR</option>' );
                select_elements.push ( '<option value="AZ">AZ</option>' );
                select_elements.push ( '<option value="CA">CA</option>' );
                select_elements.push ( '<option value="CO">CO</option>' );
                select_elements.push ( '<option value="CT">CT</option>' );
                select_elements.push ( '<option value="DC">DC</option>' );
                select_elements.push ( '<option value="DE">DE</option>' );
                select_elements.push ( '<option value="FL">FL</option>' );
                select_elements.push ( '<option value="GA">GA</option>' );
                select_elements.push ( '<option value="HI">HI</option>' );
                select_elements.push ( '<option value="IA">IA</option>' );
                select_elements.push ( '<option value="ID">ID</option>' );
                select_elements.push ( '<option value="IL">IL</option>' );
                select_elements.push ( '<option value="IN">IN</option>' );
                select_elements.push ( '<option value="KS">KS</option>' );
                select_elements.push ( '<option value="KY">KY</option>' );
                select_elements.push ( '<option value="LA">LA</option>' );
                select_elements.push ( '<option value="MA">MA</option>' );
                select_elements.push ( '<option value="MD">MD</option>' );
                select_elements.push ( '<option value="ME">ME</option>' );
                select_elements.push ( '<option value="MI">MI</option>' );
                select_elements.push ( '<option value="MN">MN</option>' );
                select_elements.push ( '<option value="MO">MO</option>' );
                select_elements.push ( '<option value="MS">MS</option>' );
                select_elements.push ( '<option value="MT">MT</option>' );
                select_elements.push ( '<option value="NC">NC</option>' );
                select_elements.push ( '<option value="ND">ND</option>' );
                select_elements.push ( '<option value="NE">NE</option>' );
                select_elements.push ( '<option value="NH">NH</option>' );
                select_elements.push ( '<option value="NJ">NJ</option>' );
                select_elements.push ( '<option value="NM">NM</option>' );
                select_elements.push ( '<option value="NV">NV</option>' );
                select_elements.push ( '<option value="NY">NY</option>' );
                select_elements.push ( '<option value="OH">OH</option>' );
                select_elements.push ( '<option value="OK">OK</option>' );
                select_elements.push ( '<option value="OR">OR</option>' );
                select_elements.push ( '<option value="PA">PA</option>' );
                select_elements.push ( '<option value="RI">RI</option>' );
                select_elements.push ( '<option value="SC">SC</option>' );
                select_elements.push ( '<option value="SD">SD</option>' );
                select_elements.push ( '<option value="TN">TN</option>' );
                select_elements.push ( '<option value="TX">TX</option>' );
                select_elements.push ( '<option value="UT">UT</option>' );
                select_elements.push ( '<option value="VA">VA</option>' );
                select_elements.push ( '<option value="VT">VT</option>' );
                select_elements.push ( '<option value="WA">WA</option>' );
                select_elements.push ( '<option value="WV">WV</option>' );
                select_elements.push ( '<option value="WI">WI</option>' );
                select_elements.push ( '<option value="WY">WY</option>' );
                break;
                
            case 'statelist':
                select_elements.push ( '<option value="">State</option>' );
                select_elements.push ( '<option value="AK">Alaska</option>' );
                select_elements.push ( '<option value="AL">Alabama</option>' );
                select_elements.push ( '<option value="AR">Arkansas</option>' );
                select_elements.push ( '<option value="AZ">Arizona</option>' );
                select_elements.push ( '<option value="CA">California</option>' );
                select_elements.push ( '<option value="CO">Colorado</option>' );
                select_elements.push ( '<option value="CT">Connecticut</option>' );
                select_elements.push ( '<option value="DC">District of Columbia</option>' );
                select_elements.push ( '<option value="DE">Delaware</option>' );
                select_elements.push ( '<option value="FL">Florida</option>' );
                select_elements.push ( '<option value="GA">Georgia</option>' );
                select_elements.push ( '<option value="HI">Hawaii</option>' );
                select_elements.push ( '<option value="IA">Iowa</option>' );
                select_elements.push ( '<option value="ID">Idaho</option>' );
                select_elements.push ( '<option value="IL">Illinois</option>' );
                select_elements.push ( '<option value="IN">Indiana</option>' );
                select_elements.push ( '<option value="KS">Kansas</option>' );
                select_elements.push ( '<option value="KY">Kentucky</option>' );
                select_elements.push ( '<option value="LA">Louisiana</option>' );
                select_elements.push ( '<option value="MA">Massachusetts</option>' );
                select_elements.push ( '<option value="MD">Maryland</option>' );
                select_elements.push ( '<option value="ME">Maine</option>' );
                select_elements.push ( '<option value="MI">Michigan</option>' );
                select_elements.push ( '<option value="MN">Minnesota</option>' );
                select_elements.push ( '<option value="MO">Missouri</option>' );
                select_elements.push ( '<option value="MS">Mississippi</option>' );
                select_elements.push ( '<option value="MT">Montana</option>' );
                select_elements.push ( '<option value="NC">North Carolina</option>' );
                select_elements.push ( '<option value="ND">North Dakota</option>' );
                select_elements.push ( '<option value="NE">Nebraska</option>' );
                select_elements.push ( '<option value="NH">New Hampshire</option>' );
                select_elements.push ( '<option value="NJ">New Jersey</option>' );
                select_elements.push ( '<option value="NM">New Mexico</option>' );
                select_elements.push ( '<option value="NV">Nevada</option>' );
                select_elements.push ( '<option value="NY">New York</option>' );
                select_elements.push ( '<option value="OH">Ohio</option>' );
                select_elements.push ( '<option value="OK">Oklahoma</option>' );
                select_elements.push ( '<option value="OR">Oregon</option>' );
                select_elements.push ( '<option value="PA">Pennsylvania</option>' );
                select_elements.push ( '<option value="RI">Rhode Island</option>' );
                select_elements.push ( '<option value="SC">South Carolina</option>' );
                select_elements.push ( '<option value="SD">South Dakota</option>' );
                select_elements.push ( '<option value="TN">Tennessee</option>' );
                select_elements.push ( '<option value="TX">Texas</option>' );
                select_elements.push ( '<option value="UT">Utah</option>' );
                select_elements.push ( '<option value="VA">Virginia</option>' );
                select_elements.push ( '<option value="VT">Vermont</option>' );
                select_elements.push ( '<option value="WA">Washington</option>' );
                select_elements.push ( '<option value="WV">West Virginia</option>' );
                select_elements.push ( '<option value="WI">Wisconsin</option>' );
                select_elements.push ( '<option value="WY">Wyoming</option>' );
                break;                
            };
            
            
        var html = '';
        if ( select_elements.length > 0 )
            {
            $.each(select_elements, function( index, element ) {
                html = html + element;
                });
            }

        $('#' + id).html(html);
        });
    }

    
