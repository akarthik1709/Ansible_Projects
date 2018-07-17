The jenkins-jobs role is depending on either build-dev role or build-prod role.
By default, the jenkins-jobs role will check out feat/carpathia-release/job-template branch. If a new branch is needed, just change the branch name inside the yml file.
The feat/carpathia-release/job-template and feat/carpathia-release/evo-3.6 branches won't work with current releases. But they should work with staging/develop branches and this is the way we would like to follow in the future release.

