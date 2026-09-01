# Architecture notes

The visual layer and business workflow are separated deliberately:

- The theme owns layout, navigation, responsive styling and page templates.
- The plugin owns request validation, persistence, administration and export.
- Requests are stored as a private custom post type instead of public content.
- Workflow data is stored as prefixed post metadata.
- Public submission uses `admin-post.php`, allowing the server to validate every field before persistence.

This separation keeps the workflow available if the visual theme is replaced and avoids placing business logic in presentation templates.

