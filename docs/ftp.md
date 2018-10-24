build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Merriweather, 8

# FTP

## File Transfer Protocal

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/components_of_web_app.png)

^ Let's revisit the concept of the components of a web app. Your source files for your website have to get from your local development system to a web server so that they are accessible on the internet to users, via their browsers on various devices. We can accomplish this movement of files using a piece of FTP software.

---

## Some FTP Programs

- Transmit (macOS)
- Fetch (macOS)
- Cyberduck (macOS & WIN)
- ~~FileZilla (macOS & WIN)~~

---

## Cyberduck

![fit left](http://digm.drexel.edu/crs/IDM221/presentations/images/cyberduck-01.png)

[Cyberyduck.io](https://cyberduck.io)

^ Cyberduck is available for Windows and macOS. Windows users should use Cyberduck for this class.

---

## Fetch

![fit left](http://digm.drexel.edu/crs/IDM221/presentations/images/fetch-01.png)

[http://fetchsoftworks.com](http://fetchsoftworks.com)

^ Fetch is only available for macOS. Mac users should use Fetch for this class.

---

### Installing Fetch

![fit right](http://digm.drexel.edu/crs/IDM221/presentations/images/fetch-irt.png)

- [http://drexel.edu/irt/computers-software/software/](http://drexel.edu/irt/computers-software/software/)
- `students/Macintoshsoftware/Fetch/`
  - .dmg
  - .txt

^ macOS users can download a copy of Fetch, and a serial number from Drexel's IRT department.

---

## Connect to Server

- hostname: yourwebsite.com
- username
- password
- connect using: FTP

---

### Find Your Info

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/bluehost-ftp.jpg)

^ Log into your Bluehost dashboard.

^ Navigate to the Hosting section

^ Then the FTP tab

^ Scroll to the bottom and look for the primary _Special FTP Account_. This will tell you the username you should be using. The password should be the same as your Bluehost account login password, unless you've changed it.

---

![fit inline](http://digm.drexel.edu/crs/IDM221/presentations/images/fetch-root.jpg)

^ Once you've logged into your server, you can upload and download files - the same as you would if you had an external hard drive or server setup on your system. The files/folders you see upon logging in are all of the parts that make your website, email and other account functions work. You should **not** mess with anything at this level. Look for a special folder called _public\_html_.

---

![fit inline](http://digm.drexel.edu/crs/IDM221/presentations/images/fetch-public_html.jpg)

^ This folder is linked to your website. Anything you put in this folder is available to the public via the browser. This is where your website files should be uploaded to make your website work. It is not the place for your PSD files, your source photographs or other source materials. It is only for the public content that makes your website.

---

![left fit](http://digm.drexel.edu/crs/IDM221/presentations/images/local_html.jpg)
![right](http://digm.drexel.edu/crs/IDM221/presentations/images/fetch-public_html-02.jpg)

^ Your server should be a mirror of your dev system. You never want to work live off the server, and you never want to make changes on the server that you haven't made to your local files. If these files aren't in sync, you're working on two different versions of the same project, a recipe for a miserable situation.

---

## Workflow

- work locally
- test locally
- upload to live server
- test on live server
- commit to repository
- push to GitHub

---

## Bluehost Wordpress Uninstall