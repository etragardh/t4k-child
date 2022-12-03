# t4k-child
###t4k Child Theme

Use this child theme to extend the functionality of tstck.io
This is the default child theme and it is already activated
in your site.

## Fork the default child theme

Best practice is to fork this repository
Something like this will probably do
(change domain before running theese commands in your terminal)

```
HOST="domain.tld"
mkdir -p ~/code/t4k/${HOST}
git fork https://github.com/etragardh/t4k-child.git ~/code/t4k/${HOST}
cd ~/code/t4k/${HOST}
```

## Make changes

Then make your changes as needed.

## The Stack

t4k (pronounced as t stack) is a hosted web development stack based on i.a.
* K8s
* Docker
* php 8.1
* nginx (cache & load balancing)
* apache (serving wordpress)
* Wordpress
* Bricks
* ACF
* Vue.js
* Some "custom magic" ;-)
* ... and many more

You don't hve to know any of the items in the stack to use tstck.io
But if you found you're way here you probably know all of them!

## The limits

We have tried our best to provide a user experience for end users (probably your client) with the following in mind
* Keep it simple
* Less is more
* Lightning fast

To reach theese goals as well as keep the security intact we had to limit some functionality which might break some of your "bad" habits.
Well, lets lern new and better habits together =)

## Bug Bounty Program

YES! We have a bug bounty program
For the most updated rules and payouts visit: https://tstck.io/bbp

This was last updated 2022-12-03

**The rules**
* Report security related bugs/issues to security@tstck.io
* DoS, DDoS or any other flood/traffic related attack is not part of the BBP
* Let us know first
* Let us patch it before you tell someone (we let you know)
* Only one payout per issue (the one report that reached our email first will have priority)

* BONUS: if you provide a fix

**The payout**
We are a small startup company with limited funds.
We have no VC backing us but yet still we have reserved some funds for the BBP since we believe this is an important part of our solution.
Probably theese numbers will rice with time - but so will the dificulty.

We have devided the cash payout in some simple steps where the payout will be the highest one - not the added sum if your issue relates to more than one step.

* Application: access higher than customer
    = 2 500 SEK
* Application: other severe security related issue
    = 5 0000 SEK
* Serverside: Privilege escalation inside the container
    = 1 000 SEK
* Serverside: Breaking out of the container/pod (any user)
    = 5 000 SEK
* Serverside: root access on the node/host
    = 10 000 SEK
* Infrastructure: other critical security related issue
    = 10 000 SEK

We prefer that any accepted bounty will be paid by invoice (excluding vat) but of course it's not mandatory.
We can pay directly to your bank account but then it will be minus taxes.

If you find other bugs that might not reach up the scale for payout we will still consider mentioning your name or nick on our webpage as a contributor.
