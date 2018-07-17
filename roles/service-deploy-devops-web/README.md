# Setting up a Web Server

## Required installations

- Kickstart on any platform (KVM, VMWare, etc) using  unified kickstart:

  http://kickstart.eng.idirect.net/ks/DevOps/rhel-ks-basic.cfg

## Server Configuration

 - Push the ansible playbook from DevOps/ansible-devops-central repository:

  export ANSIBLE_CONFIG=ansible.config
  ansible-playbook -u ansible -i ../inventory/dev \
         --private-key=~/.ssh/ansible-id_rsa server-configure-web.yml

## User Access

 - All defined DevOps user keys will be on the server and those users can access through ssh using SSH keys.

## Services

  - Current services provided:
    * Coverity
 
  - Services pending:
    * Releases Web
    * Components Web
