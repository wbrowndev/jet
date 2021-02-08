<style>
.footer{
    background-color:#2f3640;
    margin-top:6rem;
    padding:2rem;    
}
.footer__main{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:2rem;
    justify-items:center;
    padding:2rem;
    padding-bottom:11rem;
    border-bottom:2px solid rgba(0,0,0,0.7);
}
.footer__section{
    text-align:center;
}
.footer__heading{
    font-size:1.8rem;
    text-transform:uppercase;
    font-weight:300;
    padding:1rem;
}
.footer__icon{
    width:4rem;
    margin:1rem;
    
}
.footer__content{
line-height:2.5rem;
font-size:1.5rem;
}
.follow-us__icons{
    display:flex;
    justify-content:space-evenly;
    align-items:center;
}
.about-jett {
grid-column:span 2;
}
.contact{
    font-size:1.8rem;
    padding:1rem;
    display:flex;
}
.contact__icon{
    color:green;
    font-size:2.5rem;
    margin-top:-1rem;
    margin-left:-1rem;
    padding:0.5rem;
    }
.footer__sub{
    display:flex;
    justify-content:space-around;
    align-items:center;
    height:8rem;
}
@media (max-width:920px){
.footer__main{
    grid-template-columns:1fr 1fr;

}
}
@media (max-width:500px){
.footer__main{
    grid-template-columns:1fr;
}
.about-jett{
    grid-column:span 1;
}
.footer__sub{
    flex-direction:column;
}
}
</style>
<footer class="footer">
<section class="footer__main">
    <div class="footer__section">
        <h3 class="footer__heading">Need Assitance ?</h3>
        <h5>Contact us via phone or email :</h5>

        <p class="contact phone">
           <span class="contact__icon">☏</span>
           <span>+1 (876) 855-9645</span>
        </p>

        <p class="contact email">
            <span class="contact__icon">✉</span> 
            <span>eternaltours876@gmail.com</span></p>
    </div>

    <div class="footer__section follow-us">
    <h3 class="footer__heading">Follow Us</h3>
    <div class="follow-us__icons">
    <a target="_blank" href="https://facebook.com"><img class="footer__icon" src="../img/facebook.svg"/></a>
    <img class="footer__icon" src="../img/google-plus.svg"/>
    </div>
    </div>

    <div class="footer__section about-jett">
    <h3 class="footer__heading">About JETT</h3>
    <p class="footer__content"> We pride ourselves in having safe, reliable and enjoyable 
    travel . We value your safety and ensure that you are always comfortable.
    When you arrive here, there will be no hassle. We guarantee a smooth transition from airport to hotel.
    We decided that our passengers should not wait for shuttles but have the shuttles wait for them.
           We also support island-wide airport transfers so now you can visit any hotel you would like.
    </p>
    </div>
    </section>
    <section class="footer__sub">
    <p>&copy Copyright JETT 2021</p>
    <p>Website by Winston Brown</p>
    </section>
</footer>
<!-- Todo -->
<!-- /
/
 Add Facebook link and Contact Number

// Improve footer design 

// Lessen amount of hotels displayed

// Change CEO Image

// Change two images in gallery

// Change Headline

// Change Burger To Close X on toggle

//Remove per person from pricings 

// Brainstorm Checkout Configuration
-->
