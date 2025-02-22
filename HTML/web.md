# How the web works?

There are two parts to it, front-end and back-end technically called client-side and server-side. Computers connected to the web are called clients and servers depending on the functions they perform.


1. ***The Client-Server Model:***

   - **Clients** are the internet-connected devices of the web user (for example, your computer connected to your Wi-Fi or your phone connected to your mobile network) and the web-accessing software available on those devices (usually a web browser like Firefox, Edge, or Chrome).

    - **Servers** are computers that store web pages, websites, or applications. When a client device requests a webpage, a copy of the webpage is sent back as a response from the server and displayed in the user’s web browser.

2. ***Key Protocols and Systems:***
   - TCP/IP (Transmission Control Protocol/Internet Protocol): The fundamental communication protocol suite of the internet.IP addresses identify devices on the network, and TCP ensures reliable data transmission.

   - DNS (Domain Name System): Translates human-readable domain names into IP addresses.

   - HTTP/HTTPS (Hypertext Transfer Protocol/Hypertext Transfer Protocol Secure): The application protocol used for transferring data on the web.HTTPS adds encryption for secure communication.

   - URLs (Uniform Resource Locators): Web addresses that specify the location of resources on the internet.They include the protocol, domain name, and path to the resource.

3. ***The Process:***
   - Request: 
       - You enter a URL into your browser.   
       - The browser sends a DNS query to find the server's IP address.   
       - The browser sends an HTTP/HTTPS request to the server.
    - Response:
       - The server receives the request and sends back the requested files (HTML, CSS, JavaScript, etc.)
       - The browser receives the response and renders the web page.   
    - Rendering:
       - The browser parses the HTML to create the structure of the webpage. 
       - The browser applies CSS to style the webpage.
       - The browser executes JavaScript to add interactivity.

  [Reference](https://developer.mozilla.org/en-US/docs/Learn_web_development/Getting_started/Web_standards/How_the_web_works)

---
   
# HTTP VS HTTPS


| HTTP                                                             | HTTPS                                                            |
|------------------------------------------------------------------|------------------------------------------------------------------|
| HTTP stands for HyperText Transfer Protocol. In HTTP, the URL begins with “http://”. | HTTPS stands for HyperText Transfer Protocol Secure. In HTTPS, the URL starts with “https://”. |
| HTTP uses port number 80 for communication.                      | HTTPS uses port number 443 for communication.                    |
| Hyper-text exchanged using HTTP goes as plain text i.e. anyone between the browser and server can read it relatively easily if one intercepts this exchange of data and due to which it is Insecure. | HTTPS is considered to be secure but at the cost of processing time because Web Server and Web Browser need to exchange encryption keys using Certificates before actual data can be transferred. |
| HTTP Works at the Application Layer.                             | HTTPS works at Transport Layer.                                  |
| HTTP does not use encryption, which results in low security in comparison to HTTPS. | HTTPS uses Encryption which results in better security than HTTP. |
| HTTP speed is faster than HTTPS.                                 | HTTPS speed is slower than HTTP.                                 |
| HTTP does not use data hashtags to secure data.                  | HTTPS will have the data before sending it and returning it to its original state on the receiver side. |
| HTTP is used to transfer text, video, and images via web pages.  | HTTPS is used to transfer data securely via a network.           |


[Reference](https://www.geeksforgeeks.org/difference-between-http-and-https/)

---

# Web Server

A **web server** is computer software and underlying hardware that accepts requests via HTTP (the network protocol created to distribute web content) or its secure variant HTTPS. A user agent, commonly a web browser or web crawler, initiates communication by making a request for a web page or other resource using HTTP, and the server responds with the content of that resource or an error message. A web server can also accept and store resources sent from the user agent if configured to do so.[1][2]

The **hardware** used to run a web server can vary according to the volume of requests that it needs to handle. At the low end of the range are embedded systems, such as a router that runs a small web server as its configuration interface. A high-traffic Internet website might handle requests with hundreds of servers that run on racks of high-speed computers.

A **resource** sent from a web server can be a pre-existing file (static content) available to the web server, or it can be generated at the time of the request (dynamic content) by another program that communicates with the server software. The former usually can be served faster and can be more easily cached for repeated requests, while the latter supports a broader range of applications.


# DNS

The **Domain Name System (DNS)** is the phonebook of the Internet. Humans access information online through domain names, like nytimes.com or espn.com. Web browsers interact through Internet Protocol (IP) addresses. DNS translates domain names to IP addresses so browsers can load Internet resources.
