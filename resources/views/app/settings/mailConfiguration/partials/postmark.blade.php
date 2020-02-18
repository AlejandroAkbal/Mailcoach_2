<p class="alert alert-info text-sm">
    Learn how to configure Postmark by reading <a target="_blank" href="https://mailcoach.app/docs/app/mail-configuration/postmark">this section of the Mailcoach
        docs</a>.
    <br>
    You must set a webhook to
    <code class="markup-code">{{ url(action(\Spatie\MailcoachPostmarkFeedback\PostmarkWebhookController::class)) }}</code>
</p>


<x-text-field
    label="Mails per second"
    name="postmark_mails_per_second"
    type="number"
    :value="$mailConfiguration->postmark_mails_per_second"
/>

<x-text-field
    label="Token"
    name="postmark_token"
    type="password"
    :value="$mailConfiguration->token"
/>

<x-text-field
    label="User"
    name="postmark_user"
    type="text"
    :value="$mailConfiguration->user"
/>

<x-text-field
    label="Password"
    name="postmark_password"
    type="secret"
    :value="$mailConfiguration->postmark_password"
/>
