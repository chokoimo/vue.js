var vm = new Vue({
    el: '#test',

    data: {
        
        tests: [
            'test1',
            'test2',
            'test3'
        ],

        showTest: false,

        editComment: '',
        
        
        
    },

    methods: {
        addTest: function() {
            this.tests.push(this.tests);
            this.tests = '';
        },
        deleteTest: function(index) {
            if (confirm('削除しますか?')) {
              this.tests.splice(index, 1);
              
            }
        },

        showEditTest: function(index) {
            // タスク編集欄が非表示なら表示させる
            if (this.showTest === false) {
              this.showTest = true;
            // タスク編集欄が表示中なら非表示にする
            } else if (this.showTest === true) {
              this.showTest = false;
            } 
          },
          // タスク編集メソッド
        updateTest: function(index) {
            if (this.editComment === '') {
              alert('タスクを入力してください');
              return
            }
            const targetIndex = this.tests.indexOf(test);
            console.log(targetIndex);
            // spliceでタスクを置換する
            this.tests.splice(targetIndex, 1, {
              id: targetIndex,
              comment: this.editComment
            })
            this.editComment='';
        },
            

    },

    mounted() {
        console.log('test');
    }
});