///////////////////////////////////////////////////////////////
////////////                                    ////////////////
///////////         VARIABLE ASSIGNMENTS        ///////////////
///////////                                     //////////////
//////////////////////////////////////////////////////////////
const meta = `<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Christian Web Developer">
<meta name="description"
  content="The website of William H. Hall III, christian web developer. Offering web design and development services at very reasonable and affordable prices.">
<meta name="keywords"
  content="web design, web development, christian, tucson, az, SEO, christian web developers, application development, 
  mobile friendly, cutting edge design, consulting services, database management, web, websites, 
  full stack developer,church website design, christian website design, christian web hosting, church web developer,
  church web designer, affordable church websites, christian domains,">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="author" content="William H. Hall III">`;

const questions = ["Can I build my own website?", "Where should I buy my domain?", "How much does a domain name cost?", "How much does hosting cost?", "What about those website builders, like Wix or Godaddy?", "Can you recommend a hosting company?", "I have a domain name, but how do I use it?"]

const answers = ["Absolutely. If you have basic HTML and CSS knowledge, go for it. If not, <a href='contact.html'>contact me</a>.", " I have a good list of them in <a href='newsletter.html'>my newsletter</a>, or check out a <a href='https://hostingfacts.com/domain-registrars/'>top ten list</a>.", "Domain name costs vary, but generally should be under $20 per year.", "Hosting costs also vary, depending on what services you need.", "Website builders are okay, if you understand what you're doing.", "Find one that meets your specific hosting needs, whatever they are.", "You need to have your website files uploaded to the domain name." ]


questions.forEach(element => {
    // want to create a links for all of them
    // console.log(questions); 
    $(".questions").html(`${questions.join("<br><hr><br>")}`)
    
});

answers.forEach(element => {
  // want to create a links for all of them
  $(".answers").html(`${answers.join("<br><hr><br>")}`)
  
});















/////////////////////////////////////////////////////////////////
////////////                                    ////////////////
///////////             FUNCTIONS               ///////////////
///////////                                     //////////////
//////////////////////////////////////////////////////////////









/////////////////////////////////////////////////////////////////
////////////                                    ////////////////
///////////             PROCESSES              ///////////////
///////////                                     //////////////
//////////////////////////////////////////////////////////////

$(".navbar-brand").text("William H. Hall III - Christian Web Developer").css("color", "#2CB31E");
// $(".navbar-brand").css("color", "#2CB31E");
$(".font-weight-light").addClass("business-name");
$(".nav-link").css("color", "#FF7A24");
$(".current").css("color","#FFF");
$(".questions").css("font-weight","bold");





