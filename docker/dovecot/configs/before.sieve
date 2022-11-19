# Sieve rules that are run before the user's filters.
#
# Messages flagged as spam are moved into the Junk folder.
# The 'stop' prevents the execution of all other sieve
# scripts (eg vacation auto-reply on spam messages).
#
require [ "fileinto", "mailbox" ];

if header :contains "X-Spam-Flag" "YES"
{
    fileinto :create "INBOX.Junk";
    stop;
}