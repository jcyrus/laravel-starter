# GitHub Actions: Weekly Dependency Check

This repository includes an automated workflow that checks for outdated Composer dependencies every week.

## 📋 What it does

- **Runs:** Every Monday at 9:00 AM UTC (configurable)
- **Checks:** All direct Composer dependencies using `composer outdated --direct`
- **Notifies:** Sends an email and creates/updates a GitHub issue if packages are outdated
- **Manual Trigger:** Can be run manually from the GitHub Actions tab

## 🔧 Setup Instructions

### 1. Configure Email Notifications (Optional)

To receive email notifications, add these secrets to your GitHub repository:

**Settings → Secrets and variables → Actions → New repository secret**

| Secret Name     | Description                | Example                     |
| --------------- | -------------------------- | --------------------------- |
| `MAIL_SERVER`   | SMTP server address        | `smtp.gmail.com`            |
| `MAIL_PORT`     | SMTP server port           | `587` (TLS) or `465` (SSL)  |
| `MAIL_USERNAME` | SMTP username              | `your-email@gmail.com`      |
| `MAIL_PASSWORD` | SMTP password/app password | `your-app-password`         |
| `MAIL_TO`       | Recipient email address    | `you@example.com`           |
| `MAIL_FROM`     | Sender email address       | `notifications@example.com` |

#### Gmail Setup Example

If using Gmail:

1. Enable 2-factor authentication on your Google account
2. Generate an App Password: [https://myaccount.google.com/apppasswords](https://myaccount.google.com/apppasswords)
3. Use these settings:
   - Server: `smtp.gmail.com`
   - Port: `587`
   - Username: Your Gmail address
   - Password: The App Password (16 characters)

#### Other Email Providers

**SendGrid:**

- Server: `smtp.sendgrid.net`
- Port: `587`
- Username: `apikey`
- Password: Your SendGrid API key

**Mailgun:**

- Server: `smtp.mailgun.org`
- Port: `587`
- Username: Your Mailgun SMTP username
- Password: Your Mailgun SMTP password

**Amazon SES:**

- Server: `email-smtp.[region].amazonaws.com`
- Port: `587`
- Username: Your SMTP username
- Password: Your SMTP password

### 2. GitHub Issue Creation

The workflow automatically creates GitHub issues when outdated dependencies are found. No additional configuration needed - just make sure GitHub Actions has permission to create issues (enabled by default).

### 3. Customize the Schedule

Edit `.github/workflows/dependency-check.yml` to change when the workflow runs:

```yaml
on:
  schedule:
    - cron: "0 9 * * 1" # Every Monday at 9 AM UTC
```

Common schedules:

- `'0 9 * * 1'` - Every Monday at 9 AM UTC
- `'0 0 * * 0'` - Every Sunday at midnight UTC
- `'0 9 1 * *'` - First day of every month at 9 AM UTC
- `'0 9 * * 1,4'` - Every Monday and Thursday at 9 AM UTC

### 4. Manual Trigger

You can manually trigger the workflow:

1. Go to **Actions** tab in your GitHub repository
2. Select **Weekly Dependency Check** workflow
3. Click **Run workflow** button

## 📧 What You'll Receive

### Email Notification

- Subject: `⚠️ Laravel Starter Kit: Outdated Dependencies Detected`
- Body: Markdown-formatted list of outdated packages with current and latest versions

### GitHub Issue

- Automatically created/updated with label `dependencies` and `maintenance`
- Contains the same information as the email
- Updates existing open issue rather than creating duplicates

## 🧪 Testing

To test the workflow immediately:

1. Push this file to your repository
2. Go to **Actions** tab
3. Select **Weekly Dependency Check**
4. Click **Run workflow** → **Run workflow**

## 🔕 Disable Email Notifications

If you only want GitHub issues (no emails), you can:

**Option 1:** Don't configure the email secrets (workflow will skip email step)

**Option 2:** Comment out the email step in the workflow file

## 🛠️ Troubleshooting

### Email not sending?

- Verify all secrets are configured correctly
- Check the Actions logs for error messages
- Ensure your SMTP credentials are valid
- Try using an App Password instead of your regular password

### Issues not being created?

- Verify GitHub Actions has permission to create issues
- Check **Settings → Actions → General → Workflow permissions**
- Select "Read and write permissions"

### Want to test email without waiting?

Run the workflow manually from the Actions tab!

## 📚 Additional Resources

- [GitHub Actions Documentation](https://docs.github.com/en/actions)
- [Composer Outdated Command](https://getcomposer.org/doc/03-cli.md#outdated)
- [Cron Expression Generator](https://crontab.guru/)
