<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Adam Rawashdeh(aor9)</td></tr>
<tr><td> <em>Generated: </em> 7/6/2022 11:08:06 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone1-deliverable/grade/aor9" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177206660-72f3e0b2-c4a9-4e89-bb7d-42f996d203e6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Email Validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177208332-e5bcef55-5b97-4198-831c-efe2fb1fde85.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Password Validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177208394-6f249d47-c7d3-4ebd-a4bc-d21740e69457.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Passwords Don&#39;t Match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177208492-4c6d2c4f-f678-4a37-8e30-3370aa7a03e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email Not Available Validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177208543-1fd3fbae-54ee-4f49-98c3-19d6c9360fbc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username Not Available Validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177208636-31f3eaba-610e-4f9c-8fa7-eea452016adf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Form with Valid Data before Submission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177208730-cdd61e95-f724-4c95-819d-ed5097ae54b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users Table with Data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/8">https://github.com/adamrawashdeh/IT202-451/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Passwords- In the code it states that the password must be 8 characters<br>or longer. It cannot be left empty. Also, we must make sure that<br>password and confirm are the same. If not the user will get an<br>error message stating that the passwords must match.<div>Username- The username can be any<br>length that is less than or equal to 30.&nbsp;The characters can be either<br>be letters a-z, numbers 0-9, an underscore, or dash. Username box can&#39;t be<br>left empty.</div><div>DB- The code makes sure to convert the inputed information into the<br>database. Everything is displayed in the table except for the password. That info<br>is only known by the registered user.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177209911-3704684d-6e65-4ffd-ae39-3b9d487b858f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password Mismatch Validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177209958-00132a42-04b0-488d-98d7-c008ce5fbc97.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Non-Existing User<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177209996-6057882a-5529-4fa5-8a14-48711f0742fa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/26">https://github.com/adamrawashdeh/IT202-451/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Password- When logging it won&#39;t accept a password less than 8 characters. It<br>must also check to verify that the password entered exists.<div>User- If email is<br>entered the code fetches to see if it exists in the user table.<br>If not than it will give you message and you must enter a<br>valid email.</div><div>Success Login- When both the password and email are entered and if<br>both are valid in the system than it will direct you into your<br>home page.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177210708-be679ae7-1350-4a57-8e24-0f754f6930cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Logout<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177210769-376ab16b-4674-4103-a79f-c7f6b94444ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged out user can&#39;t access login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/26">https://github.com/adamrawashdeh/IT202-451/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Logout- When the user is logged in and in their page they can<br>simply click the logout button and it will redirect them in the login<br>page.<div>Login-Protected Page- Once the user is logged out, they won&#39;t be able to<br>access pages that are available for logged in users. If they try to<br>then they will get a message stating they must be logged in to<br>view that page.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177210769-376ab16b-4674-4103-a79f-c7f6b94444ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged out user can&#39;t access login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177211176-dc00f0b3-0754-400b-b05f-6883613f3cbe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged out user can&#39;t access role-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177211299-69f73916-bd44-4f4b-9bef-eb4cd80ed820.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles Table with Valid Data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177211464-57db79d8-eb81-480b-b865-0000c9bc6d97.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UserRolesTable with Valid Data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/27">https://github.com/adamrawashdeh/IT202-451/pull/27</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Once the user is logged out they won&#39;t be able to access pages<br>that are available for logged in users. If they try to then they<br>will get a message stating they must be logged in to view that<br>page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Once a user is logged out they cannot access any of the roles<br>such as list, admin, or create. If they try to access it without<br>being logged in than they will get a message saying that they don&#39;t<br>have permission to access this page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177212055-e4ffca99-7d52-4fce-9fe3-2116cae1e661.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Nav, Forms, and UI are cleaned and styled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/26">https://github.com/adamrawashdeh/IT202-451/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I decided to first fix up some of the colors. None of them<br>seemed to match so I decided to make the background a salmon color.<br>Second, I decided to make the words from a black color. Finally, I<br>made the border 5%. This made it more of a rectangle box rather<br>than an oval shape. It was better because when the user would register<br>they can see more clearly the information they were inputing.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177212923-b30d8f28-90f9-41a5-8920-2a865502ae4a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>An example of creating a role called &quot;Spectator&quot;<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177213090-9ab3e930-298c-4f2d-b6b3-a6a0cb6d0066.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>An example of updating a role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/15">https://github.com/adamrawashdeh/IT202-451/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>To create these messages the code would not to use the word flash<br>instead of echo. Flash is suppose to inform the user about a specific<br>action. We require flash under each page we want to inform the user,<br>so they will not be lost/confused. An example of flash messages include &quot;Successfully<br>logged out&quot; and &quot;Passwords don&#39;t match&quot;.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177213750-4c887075-cc11-4802-8da6-765c68f3298c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User Profile Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/16">https://github.com/adamrawashdeh/IT202-451/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>When clicking on the profile page you will see info about your account<br>(Email, Username, etc.).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177213927-f542cd8f-3c93-4843-b296-8742d8e866b3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username, Email, and Password change<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177213975-ef389d2b-15dc-4510-b038-5f6f01e26ba6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password Mismatch<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177214003-80a220d2-fab9-46cb-b111-959a67d73c4f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Taken Username<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177214038-882ba02e-049a-46f3-beaf-d1bd3668dbbe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Taken Email<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177214094-e462ab7c-ccb3-4a47-9943-a0c6ebe194f3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User Table Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177214131-2c828ca3-9dcb-4c6e-baa5-347924ad9917.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User Table After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/16">https://github.com/adamrawashdeh/IT202-451/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>On the profile page the user will be able to change any information<br>from their account (email, username, and password). The email, username, and password requirements<br>are still the same from the login requirements. To change the password, the<br>user must know their previous password. You then press update profile and you<br>get a message saying either update successful or something went wrong.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177214510-cfff940d-a077-4067-9046-d65e91842633.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Done Issues Screenshot 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177214555-2c98c09f-3f78-4751-a139-95841a82be45.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Done Issues Screenshot 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/177214583-4ef9f52d-5c03-47bd-be44-c770d8bc87bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Closed Issues<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/projects/1">https://github.com/adamrawashdeh/IT202-451/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/login.php">https://aor9-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone1-deliverable/grade/aor9" target="_blank">Grading</a></td></tr></table>