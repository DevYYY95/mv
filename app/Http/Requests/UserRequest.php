public function showAdminStatusOf($user)
{
return $user->is_admin ? 'Yes' : 'No';
}