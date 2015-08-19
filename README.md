# https://elgg.org

This is the source code for the elgg.org homepage and community site.

## Features

 * Turns a message board widget into a send a private message widget. Spammers
   were leaving messages on their message boards and we would rather have
   public conversation occur in the forums
 * Forcing sizes on avatars since Twitter avatars do not fit our desired sizes
 * Delete private messages sent from deleted users
 * Add APC cache flush button to admin control panel widget
 * Filter out friending and new bookmarks from the river


## Contributing

Automatically fix various style/coding issues in changed files:

```
composer fix
```
