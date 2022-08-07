<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Adam Rawashdeh(aor9)</td></tr>
<tr><td> <em>Generated: </em> 8/7/2022 4:46:25 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-4-arcade-project/grade/aor9" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone4 branch</li><li>Create a new markdown file called milestone4.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone4.md</li><li>Add/commit/push the changes to Milestone4</li><li>PR Milestone4 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes</li><li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/182916140-b5e9ef09-9414-4bd5-939a-fdd27d6a396a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>New Column on the Users Table: Visibility<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/182916256-d321eff5-84c3-4f58-933f-f820baa28aa4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile of account that is currently logged into<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/182916386-7279f6f7-8eea-49a0-a240-a19676a3c49e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile of account that isn&#39;t currently logged into<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/85">https://github.com/adamrawashdeh/IT202-451/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/profile.php?id=10">https://aor9-prod.herokuapp.com/Project/profile.php?id=10</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>We first get the user id from the profile. Then we check to<br>see that when a profile is being viewed that it&#39;s a person viewing<br>their own profile or if they&#39;re viewing a different profile. We than add<br>visibility so the database can start fetching it. 1 is public and 0<br>is private. Lastly, we create a checkbox to let the user decide if<br>they want their visibility to be shown or not. If no, than user<br>will get a message saying user is private. If yes, user will be<br>able to view their scores such as best and latest.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Anywhere a username is display should link to the user's profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the home page scoreboards with the proper links</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/182916657-0dcf08e8-f8c3-4167-ba92-619fb47496df.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Homepage with proper links to usernames profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/85">https://github.com/adamrawashdeh/IT202-451/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to the related pages on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/home.php">https://aor9-prod.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>We make sure user id and username is set. If not, then user<br>id will default to 0 and username to an empty string. Finally, we<br>use php echo to get the correct URL and append our user id.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Viewing an Active or Expired competition should show a related top 10 scoreboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing competition scoreboards</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/183215893-55ed5d8f-78f9-4715-ab09-2745b784c33e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Competition Scoreboards<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/86">https://github.com/adamrawashdeh/IT202-451/pull/86</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to an active or expired competition</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/view_competition.php?id=15">https://aor9-prod.herokuapp.com/Project/view_competition.php?id=15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>The code gets the user_id, score, when the score was created. Then it<br>uses dense rank to partition it in descending order.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to see their competition history (active and expired) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of competition history view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/183270549-3461d1c6-7fe2-4582-a6a5-f4f5c0637169.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows all comp history with labels of active and expired<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/87">https://github.com/adamrawashdeh/IT202-451/pull/87</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-dev.herokuapp.com/Project/expired_competition.php">https://aor9-dev.herokuapp.com/Project/expired_competition.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>A new file was created for showing entire competition history. It was the<br>same as list_competitions, but with small changes. First I added an IF statement<br>on whether the comp was expired or not. If expired then the status<br>would say Expired and if not then the status would be Active. After<br>I made it into a row with the same name I used: Status.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to the Active Competitions view </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/183309543-4887fe7e-35ab-450c-b50c-352dda675e70.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Active Competitions<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/89/">https://github.com/adamrawashdeh/IT202-451/pull/89/</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Active Competitions page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/list_competitions.php">https://aor9-prod.herokuapp.com/Project/list_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> User's score history will include pagination </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's scores</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/183309572-6a21445a-5fcf-4236-82fc-a377675bd2df.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User&#39;s scores<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/89/">https://github.com/adamrawashdeh/IT202-451/pull/89/</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add url to user profile (might want to use a public profile)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/profile.php?id=10">https://aor9-prod.herokuapp.com/Project/profile.php?id=10</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User with the role of admin can edit non-paid out competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the list of competitions the admin can view along with the link to edit it</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the competition edit form</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing related message of not being able to edit a competition that's been paid out</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add before and after screenshots of an edited competition (db view)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the admin list page and a link to the edit competition edit page</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Game should be fully implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the message showing a score can't be generated when logged in</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the game in progress</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/183298879-c9646f07-dd7b-4678-888c-c3abb22d4509.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing game in progress<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the message showing score was saved if logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/183298844-1a11dcc5-a265-427e-a809-2dbb7e0b9756.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message that score has been saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add link to home page with high score lists</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/home.php">https://aor9-prod.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/88">https://github.com/adamrawashdeh/IT202-451/pull/88</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic used for showing the related messages</td></tr>
<tr><td> <em>Response:</em> <p>To save the score, it first checks that the users score isn&#39;t 0.<br>If not, then it is submitted into the scores table and fills out<br>the Users id, the score, when it was created, and when it was<br>modified. User is notified that their score has been saved with an alert<br>message. The user then can click &quot;OK&quot; to play again.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/183310362-f4baeb43-8f1b-4f76-b558-2ba0bd356865.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issues that are complete<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-4-arcade-project/grade/aor9" target="_blank">Grading</a></td></tr></table>