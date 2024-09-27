<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
<?= $this->include('partials/header') ?>

<h2>Team Members</h2>

<!-- Button Container -->
<div style="text-align: right; margin-bottom: 20px;">
    <a href="/admin/addTeam" class="btn-add">Add New Team Member</a>
</div>

<table class="team-table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Role</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($team as $member): ?>
            <tr>
                <td><img src="<?= base_url('uploads/team_pics/' . esc($member['image'])) ?>" alt="<?= esc($member['name']) ?>" class="team-img"></td>
                <td><?= esc($member['name']) ?></td>
                <td><?= esc($member['role']) ?></td>
                <td><?= esc($member['email']) ?></td>
                <td>
                    <a href="/admin/editTeam/<?= esc($member['id']) ?>" class="btn-edit">Edit</a>
                    <a href="/admin/deleteTeam/<?= esc($member['id']) ?>" class="btn-delete">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
