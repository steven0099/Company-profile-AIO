<h2>Team Members</h2>
<a href="/admin/addTeam">Add New Team Member</a>
<ul>
  <?php foreach ($team as $member): ?>
    <li>
      <?= esc($member['name']) ?> - <?= esc($member['position']) ?>
      <a href="/admin/deleteTeam/<?= esc($member['id']) ?>">Delete</a>
    </li>
  <?php endforeach; ?>
</ul>
