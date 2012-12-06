#!ruby
# coding:utf-8
#

test = <<"EOR"
{\"title\"=>\"hogehoge\"}
EOR

puts test.gsub(/\\/,'')
