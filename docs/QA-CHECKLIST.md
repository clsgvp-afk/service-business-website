# Manual QA checklist

## Public form

- [ ] All six steps are reachable with mouse and keyboard.
- [ ] Required fields prevent incomplete submission.
- [ ] Invalid email addresses are rejected.
- [ ] Descriptions shorter than ten characters are rejected.
- [ ] Dates in the past are rejected.
- [ ] The privacy checkbox is required.
- [ ] The honeypot field does not block legitimate submissions.
- [ ] JPEG, PNG and WebP files below 5 MB upload successfully.
- [ ] Unsupported or oversized files are not stored.
- [ ] Successful submission creates exactly one private request.

## WordPress administration

- [ ] Requests are visible only to authorized backend users.
- [ ] Request details are escaped when displayed.
- [ ] Status and internal notes can be saved.
- [ ] Status filtering returns the correct requests.
- [ ] The “Neu” counter matches new requests.
- [ ] CSV export requires administrator permissions and a valid nonce.
- [ ] CSV output opens correctly as UTF-8 and contains all expected columns.

## Responsive and accessibility checks

- [ ] Form remains usable at 320 px viewport width.
- [ ] Labels are associated with their controls.
- [ ] Focus order follows the visual order.
- [ ] Success and error messages expose appropriate status roles.
- [ ] No horizontal overflow occurs on mobile.

