<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Adam Rawashdeh(aor9)</td></tr>
<tr><td> <em>Generated: </em> 7/16/2022 10:55:42 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-2-arcade-project/grade/aor9" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>I decided that I will be doing a Pong Game.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>The user must try to score the ball into the opponents side and<br>rack up as much points as they can before the opponent meets their<br>set score. If the opponent reaches a score of the 3, then the<br>game end and the players score will be sent to the score tables<br>(unless score for player was 0).&nbsp;<span style="font-family: Times; font-size: 18px;">To move up use<br>either the UP key or W key. To move down use either the<br>DOWN key or S key.</span><br style="font-family: Times; font-size: 18px;"><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179381137-9081bf98-3307-4901-b1d1-806556ba8261.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot shows the game<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/56">https://github.com/adamrawashdeh/IT202-451/pull/56</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/home.php">https://aor9-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179380933-7db96432-436e-4aa2-b410-c745a1d1d0d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Notice that score has been saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of your scores table with some score entries</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179380963-7b6df0d2-d3e8-4036-b067-0e70da2aed34.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Contains different User&#39;s scores and samples<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <p>To save the score, it first checks that the users score isn&#39;t 0.<br>If not, then it is submitted into the scores table and fills out<br>the Users id, the score, when it was created, and when it was<br>modified. User is notified that their score has been saved.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/50">https://github.com/adamrawashdeh/IT202-451/pull/50</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179381067-69f4f0f4-be6c-4307-ad38-d5826b00cf9e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows latest scores<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>For latest scores in requires a function with 2 parameters: user_id and limit.<br>The limit is set to 10. Once a score is created it is<br>taken from the scores table and put into the profile page with under<br>latest scores. It will show newest scores on the top and oldest scores<br>on the bottom.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/54">https://github.com/adamrawashdeh/IT202-451/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/profile.php">https://aor9-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputiting the 3 different scoreboard durations (weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179381046-6717c6ca-e7cb-4442-af7f-19b8bb0c24c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>3 functions for day, weekly, monthly, and lifetimes<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>For get top 10 it works by creating 3 functions. To get the<br>time that the score was created it checks if the date is previous<br>to the value of end of the selected duration. The user id, score,<br>username, and time is created is then displayed on the home page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/52">https://github.com/adamrawashdeh/IT202-451/pull/52</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179380862-bc7d6d80-d7e0-4629-8f43-59b2a986fc36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows Daily, Weekly, and Monthly Scoreboards<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179380887-04673f01-0353-4d5a-8af2-bed998334932.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Proper Heading, Description, and link<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>For proper heading I used h1 tags and put &quot;Pong Game&quot; inside. For<br>description I put summary tags and put the rules of it inside. Finally,<br>for game link I put a tags than put href equal to my<br>game link.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/adamrawashdeh/IT202-451/pull/55">https://github.com/adamrawashdeh/IT202-451/pull/55</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/home.php">https://aor9-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179381147-d8bf0fda-1bec-4c78-869e-a895b43c97a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>All things are complete<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179381166-0ebe7c98-a9e9-48a2-9fa3-59d4bccf2a3a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>All things are complete<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106170133/179381180-85ce209c-7066-473e-a065-e57f8b656f5a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Closed Issues<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aor9-prod.herokuapp.com/Project/login.php">https://aor9-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-2-arcade-project/grade/aor9" target="_blank">Grading</a></td></tr></table>