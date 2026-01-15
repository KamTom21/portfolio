# Osobní portfolio – Tomáš Kamarýt (WWW + DIM)

Tento web je osobní portfolio, kde ukazuju práci ze školy.  
Obsahuje sekce pro WWW projekty (weby), DIM (grafická tvorba) a Kresby jako volitelnou kategorii.

Cílem projektu bylo vytvořit responzivní a moderní portfolio, které bude fungovat na mobilu, tabletu i PC.

Obsah webu (stránky)

index.html – Homepage  
- stručné info o mně (jméno, obor, ročník)  
- krátký popis (“pitch”)  
- kontakt (e-mail)

www.html – WWW projekty  
- název projektu  
- krátký popis  
- moje role  
- použité technologie  
- odkaz na web  
- náhledy (carousel)

dim.html – DIM práce  
- digitální grafika + tisk  
- u každé práce název + krátký popis + formát  
- obrázky se zobrazují přes carousel na mobilu

kresby.html – Kresby  
- kresby do vlastního kalendáře  
- galerie ukázek

Použité technologie

- HTML5
- CSS3
- Bootstrap 5.3.3
- Bootstrap Icons
- Google font: Inter
- ai

Responzivita

Web je responzivní díky Bootstrap grid systému
- Navbar (mobilní menu)
- Karty (cards)
- Carousel (náhledy projektů)
- Modals (zvětšení grafiky a prací)

Optimalizace obrázků

- Obrázky jsou načítané s `loading="lazy"`
- Každý obrázek má vyplněný `alt` popis

Sledování návštěvnosti 

Variant A.

Na stránkách je vložený JS skript `client.js`, který po načtení stránky odešle:
- čas návštěvy
- URL stránky

Data se ukládají do souboru:

`/logs/visits.csv`

PHP skript:

`track.php`

Web je nasazený na hostingu Endora (freehosting).

Postup:
1. Přihlášení do Endora administrace
2. Otevření **WebFTP**
3. Nahrání souborů do složky `/public_html`
4. Ověření funkčnosti webu přes veřejnou adresu





