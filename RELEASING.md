# Releasing

This repository is using git-flow model to manage releases.

Please refer to https://danielkummer.github.io/git-flow-cheatsheet/ for 
step-by-step release commands.

## Process workflow
1. Make sure that you have the latest versions of `master` and `develop` branches.
2. Checkout `develop` branch.
3. Start release: `git flow release start 1.2.3`, where `1.2.3` is a next release (see Version Number below).
4. Push created `release/1.2.3` branch to remote: `git flow release publish 1.2.3`
5. Once CI passes (if any), finish the release: `git flow release finish 1.2.3`
6. Push `develop` and `master` to remote.

## Rule of thumb
- Latest commit to `master` should contain a tag and should exist in `develop`. 
  If it does not - the release was done incorrectly and should be repeated from 
  the beginning. 
- Always make sure that there is a remote `release/1.2.3` branch created.
- At any moment in time there should not be any commits in `master` that are not
  tagged with a version.

## Version Number
Release versions are numbered according to [Semantic Versioning](https://semver.org/).
Given a version number X.Y.Z:
  * X = Major release version. No leading zeroes.
  * Y = Minor Release version. No leading zeroes.
  * Z = Hotfix/patch version. No leading zeroes.
