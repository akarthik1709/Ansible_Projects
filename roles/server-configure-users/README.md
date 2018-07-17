# Setting up Users
### Purpose
This role will setup specified users with groups, userid, alias, and ssh-keys on a designated node.  It also sets up the Ansible user that is needed to authenticate with ansible.eng.idirect.net.

### Adding a User to the Roles
```
cd ansible-devops-central/roles/user-creation/vars
vi main.yml
```

Just to keep it clean, from the top add the following information.
```
- username: User name
    name: "Name of User"
    groups: ['wheel']
    uid: user id from LDAP
    profile: |
      alias ll='ls -lah'
      any desired aliases
    ssh_key:
      - "ssh key goes here"
```
### Example
```
- username: vjohnson
    name: "Van Johnson"
    groups: ['wheel']
    uid: 1480
    profile: |
      alias ll='ls -lah'
      alias c='clear'
    ssh_key:
      - "ssh-rsa AAAAB3NzaC1y... vjohnson@VJOHNSO-5N64CT1"
```
### Running the playbook
If you want to run the playbook standalone then use the following commands.  You will most likely need to edit the user-creation.yml to set the specific inventory group that you want to run it against.
```
cd ansible-devops-central/playbooks
ansible-playbook user-creation.yml
```
