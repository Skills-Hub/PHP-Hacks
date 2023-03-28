# PHP Form for URL/E-mail: A Beginner's Guide

👋 Hello there! Are you looking to create a form on your website that can handle URL and e-mail inputs? Look no further! In this guide, we'll walk you through the steps of creating a PHP form that can handle both types of inputs.

## Setting Up Your Form

First, let's create the HTML form. Here's an example:

```html
<form action="submit-form.php" method="post">
  <label for="url-input">Enter a URL:</label>
  <input type="url" id="url-input" name="url-input">

  <label for="email-input">Enter your e-mail:</label>
  <input type="email" id="email-input" name="email-input">

  <input type="submit" value="Submit">
</form>
```
Notice that we've used the type="url" and type="email" attributes for the input fields to restrict the input to valid URLs and e-mails.

# Handling Form Submissions
Next, let's create the PHP file that will handle the form submissions. Here's an example:

```
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $url = $_POST['url-input'];
  $email = $_POST['email-input'];

  // Do something with the URL and e-mail
}
?>

```
In this example, we're using the $_POST superglobal to retrieve the URL and e-mail inputs from the form. You can then use these values however you like, such as saving them to a database or sending an e-mail.

# Validating Inputs
It's important to validate user inputs to ensure that they are of the correct format. Here's an example of how to do this in PHP:
```
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $url = $_POST['url-input'];
  $email = $_POST['email-input'];

  if (!filter_var($url, FILTER_VALIDATE_URL)) {
    // URL is not valid
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // E-mail is not valid
  }

  // Do something with the URL and e-mail
}
?>
```
In this example, we're using the `filter_var()` function to validate the URL and e-mail inputs. If either input is not valid, you can display an error message to the user or take other appropriate action.


# 🎉 Conclusion 🌇

Congratulations! You've now learned how to create a PHP form that can handle both URL and e-mail inputs. With a little bit of validation, your form will be more robust and secure.


Happy coding! 🔥💻🚀

I hope you found this article helpful! If you have any questions or comments, feel free to leave them below. 🙌


# 📣 Share your feedback

If you have any questions, comments, or feedback on this blog post, I'd love to hear from you! You can reach me on LinkedIn [Rayan Ch.](https://www.linkedin.com/in/rayan-ch-b787ab224/) or by email at [mo@gglink.uk](mailto:mo@gglink.uk).

Thanks for reading! 😊
