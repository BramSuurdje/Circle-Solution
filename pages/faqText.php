<?php 

if ($currentbutton == 'button1') {
    echo "<span class='message'> 
    <div class='tittleQuestion'>What is an intranet?</div>
        Intranet means a closed
        network that resides on a local network. An intranet
        acts like a website that only authorized users can access
        and is generally used by organizations who wish to share knowledge,
        internal communications, and information with their colleagues. </span>";
} elseif ($currentbutton == 'button2') {
    echo "<span class='message'>
    <div class='tittleQuestion'>What is the difference between the internet and an intranet?</div>
        The main difference between an intranet
        and the internet is that the former is a closed network, and the latter
        is a public network. In short, the internet is for all; a company intranet 
        is for a select group of people. </span>";
} elseif ($currentbutton == 'button3') {
    echo "<span class='message'>
    <div class='tittleQuestion'>What is an intranet and an extranet?</div>
        An intranet is a closed network designed to
        allow an organization to share information and corporate communication among 
        its employees. An extranet is similar to an intranet, but allows third-party 
         entry, so vendors or partners can experience full or selected access.</span>";
} elseif ($currentbutton == 'button4') {
    echo "<span class='message'>
    <div class='tittleQuestion'>What are intranet sites?</div>
        Intranet sites are closed internal networks for authorized
        members of an organization to share information. They act as a company news channel,
        an internal communications tool, and a collaboration tool.</span>";
}elseif ($currentbutton == 'button5') {
    echo "<span class='message'>
    <div class='tittleQuestion'>What are intranet applications?</div>
        Intranet applications are software within 
        an intranet like document publishing, communication tools, broadcasts, etc.
        These applications allow the user to do a range of activities, for example:
        publish a blog, connect with a colleague, or run employee surveys. </span>";
}elseif ($currentbutton == 'button6') {
    echo "<span class='message'>
    <div class='tittleQuestion'>What is an intranet portal?</div>
        An intranet portal is the access point to the user’s
        company intranet. It is on the intranet portal where the user can access 
        intranet applications as well as external apps, and information and knowledge
        that is stored within the intranet itself.</span>";
}elseif ($currentbutton == 'button7') {
    echo "<span class='message'>
    <div class='tittleQuestion'>Can an intranet work without the internet?</div>
        Former on-premise company intranets could operate 
        without internet. But for a wide range of reasons, the majority of company intranet
         applications are now cloud-based, so an internet connection is necessary.</span>";
}elseif ($currentbutton == 'button8') {
    echo "<span class='message'>
    <div class='tittleQuestion'>Can an intranet be accessed remotely?</div>
        Yes, an intranet can be accessed on a range of devices,
        regardless of location – all that is required is an internet connection. This is ideal
        for any organization with dispersed or front-line employees who need communication tools
        and access to organizational information wherever they are. </span>";
}elseif ($currentbutton == 'button9' ? 'active' : '') {
    echo "<span class='message'>
    <div class='tittleQuestion'>What does an intranet do?</div>
        Offering all types of organizational solutions,
        intranet software can improve employee engagement, aid communication, and 
        increase collaboration. Modern intranets are now mostly cloud-based which allows
        global organizations to connect, share knowledge, and broadcast news quickly and
        easily. </span>";
}
?>
