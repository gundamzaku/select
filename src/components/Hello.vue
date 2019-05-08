<template>
  <el-container style="border: 1px solid #eee">    
    <el-container>
      <el-header style="text-align: center; font-size: 20px">
        <span>王小虎</span>
      </el-header>
      <el-main>
        <el-form label-width="80px">
          <el-form-item 
              v-for="(input) in inputs"
              :label="input.title" 
              :key="input.key">
            <el-input v-model="input.value"></el-input>
          </el-form-item>             
          <el-form-item>
            <el-button type="primary" @click="onSubmit">立即创建</el-button>
            <el-button>取消</el-button>
          </el-form-item>
        </el-form>
      </el-main>
      <el-footer>
      </el-footer>
    </el-container>
  </el-container>
</template>

<style>
  .el-header {
    background-color: #B3C0D1;
    color: #333;
    line-height: 60px;
  }

</style>

<script>
  export default {
    data() {
      return {
        inputs: [
          {title: '菜单一',value: ''},
          {title: '菜单二',value: ''},
          {title: '菜单三',value: ''},
          {title: '菜单四',value: ''},
          {title: '菜单五',value: ''},
          {title: '菜单六',value: ''}
        ]
      }
    },
    created() {
      let localItems = sessionStorage.getItem('items');
      localItems = JSON.parse(localItems);
      let offset = 0;
      if(localItems.length>0){
        for(var i in localItems){
          this.inputs[offset].value = localItems[i];
          offset++;
        }
      }
    },    
    methods: {
      onSubmit() {
        //确认有数据的话，跳至新页面 
        let items = new Array;
        for(let i in this.inputs){
          if(this.inputs[i].value!=''){
            items.push(this.inputs[i].value)
          }
        }

        if(items.length>0){
          sessionStorage.setItem('items', JSON.stringify(items));
          window.location.href = '/#/award';
        }else{
          const h = this.$createElement;
          this.$message({
            message: h('p', null, [h('span', null, '少年你想选什么东西？ '),
            ])
          });
        }

      }
    }
  }
</script>