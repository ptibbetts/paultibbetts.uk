# [paultibbetts.uk](https://paultibbetts.uk)

Personal website. Built on WordPress using [Sage](https://github.com/roots/sage), [Bedrock](https://github.com/roots/bedrock) and [Trellis](https://github.com/roots/trellis) by
the [Roots](https://roots.io) team.

### Installation

Clone this repository next to a copy of [Trellis](https://github.com/roots/trellis), to achieve the following file structure:

```
├── paultibbetts.uk (container)
│   ├── ansible (Trellis)
│   └── site (this repo)
```

Move the Vagrantfile from Trellis to the root: `mv ansible/Vagrantfile ./Vagrantfile`

#### Allusion/Theme
- Install Sage's [requirements](https://github.com/roots/sage#requirements)

```
cd web/app/themes/allusion
npm install
bower install
gulp
```

#### Trellis

- Make sure you have the [requirements](https://github.com/roots/trellis#requirements) all installed
- Install the Ansible Galaxy roles: `$ cd ansible && ansible-galaxy install -r requirements.yml`
- Configure your wordpress_sites: [docs](https://github.com/roots/trellis#wp-sites) and follow our [example](https://github.com/roots/roots-example-project.com/blob/master/ansible/group_vars/development)

##### Staging/Production

If you also want staging/production servers, create those manually at this point.

- Add their hostnames/IPs to `ansible/hosts/<environment>`
- Configure their wordpress_sites just like above in #3 and follow our [example](https://github.com/roots/roots-example-project.com/blob/master/ansible/group_vars/production)
- Define your github_ssh_keys to give users the ability to deploy. Follow our [example](https://github.com/roots/roots-example-project.com/blob/master/ansible/group_vars/production#L3-L9) and read the [Wiki](https://github.com/roots/trellis/wiki/SSH-Keys).

### Provision

Provisioning is done by [Ansible](http://www.ansible.com/home) from the `/ansible` folder

#### Development

`vagrant up`

Vagrant will automatically provision the box on the initial `vagrant up` but you can use `vagrant provision` do it afterwards.


#### Staging/Production

Provision server: `ansible-playbook -i hosts/<environment> server.yml`

Deploy the site: `./deploy.sh <environment> <site name>`
