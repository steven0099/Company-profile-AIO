<h2>Add Team Member</h2>
<form action="/admin/saveTeam" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name">
    
    <label for="position">Position:</label>
    <input type="text" name="position">
    
    <label for="bio">Bio:</label>
    <textarea name="bio"></textarea>
    
    <button type="submit">Add Member</button>
</form>
